<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class CreateUsingTemplate
{
    public const OPERATION_ID    = 'repos/create-using-template';
    public const OPERATION_MATCH = 'POST /repos/{template_owner}/{template_repo}/generate';

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate $hydrator, private string $templateOwner, private string $templateRepo)
    {
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Repos\CreateUsingTemplate\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('POST', str_replace(['{template_owner}', '{template_repo}'], [$this->templateOwner, $this->templateRepo], '/repos/{template_owner}/{template_repo}/generate'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\Repository
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Repository::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Repository::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
