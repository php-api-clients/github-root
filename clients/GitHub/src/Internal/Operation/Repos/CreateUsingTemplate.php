<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\Repos\CreateUsingTemplate\Request\ApplicationJson;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;

final class CreateUsingTemplate
{
    public const OPERATION_ID    = 'repos/create-using-template';
    public const OPERATION_MATCH = 'POST /repos/{template_owner}/{template_repo}/generate';
    /**The account owner of the template repository. The name is not case sensitive. **/
    private string $templateOwner;
    /**The name of the template repository without the `.git` extension. The name is not case sensitive. **/
    private string $templateRepo;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Generate $hydrator, string $templateOwner, string $templateRepo)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->templateOwner           = $templateOwner;
        $this->templateRepo            = $templateRepo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('POST', (string) (new UriTemplate('/repos/{template_owner}/{template_repo}/generate'))->expand(['template_owner' => $this->templateOwner, 'template_repo' => $this->templateRepo]), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): FullRepository
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(FullRepository::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(FullRepository::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
