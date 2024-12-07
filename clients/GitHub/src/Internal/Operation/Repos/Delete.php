<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Operations\Repos\Delete\Response\ApplicationJson\Forbidden\Application\Json;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
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

final class Delete
{
    public const OPERATION_ID    = 'repos/delete';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Repo $hydrator, string $owner, string $repo)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', (string) (new UriTemplate('/repos/{owner}/{repo}'))->expand(['owner' => $this->owner, 'repo' => $this->repo]));
    }

    public function createResponse(ResponseInterface $response): BasicError|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * If an organization owner has configured the organization to prevent members from deleting organization-owned repositories, a member will get this response:
                     **/
                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Json::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\Operations\Repos\Delete\Response\ApplicationJson\Forbidden\Application\Json(403, $this->hydrator->hydrateObject(Json::class, $body));
                    /**
                     * Temporary Redirect
                     **/

                    case 307:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(BasicError::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
