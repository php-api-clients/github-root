<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
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

final class CreateOrUpdateRepoSecret
{
    public const OPERATION_ID    = 'actions/create-or-update-repo-secret';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/actions/secrets/{secret_name}';
    /**secret_name parameter **/
    private string $secretName;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName $hydrator, private string $owner, private string $repo, string $secretName)
    {
        $this->secretName = $secretName;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\CreateOrUpdateRepoSecret\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PUT', str_replace(['{owner}', '{repo}', '{secret_name}'], [$this->owner, $this->repo, $this->secretName], '/repos/{owner}/{repo}/actions/secrets/{secret_name}'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Actions\CreateOrUpdateRepoSecret\Response\ApplicationJson\Created\Application\Json|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response when creating a secret
                     **/
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Actions\CreateOrUpdateRepoSecret\Response\ApplicationJson\Created\Application\Json::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Actions\CreateOrUpdateRepoSecret\Response\ApplicationJson\Created\Application\Json::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Response when updating a secret
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
