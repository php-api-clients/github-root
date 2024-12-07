<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Projects;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Projects\ProjectId;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Operations\Projects\Update\Response\ApplicationJson\Forbidden\Application\Json;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\Projects\Update\Request\ApplicationJson;
use ApiClients\Client\GitHub\Schema\ValidationErrorSimple;
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
use function json_encode;

final class Update
{
    public const OPERATION_ID    = 'projects/update';
    public const OPERATION_MATCH = 'PATCH /projects/{project_id}';
    /**The unique identifier of the project. **/
    private int $projectId;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private ProjectId $hydrator, int $projectId)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->projectId               = $projectId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('PATCH', (string) (new UriTemplate('/projects/{project_id}'))->expand(['project_id' => $this->projectId]), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Project|WithoutBody
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
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Project::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(Project::class, $body);
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Json::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\Operations\Projects\Update\Response\ApplicationJson\Forbidden\Application\Json(403, $this->hydrator->hydrateObject(Json::class, $body));
                    /**
                     * Requires authentication
                     **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(401, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Gone
                     **/

                    case 410:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(410, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ValidationErrorSimple::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\ValidationErrorSimple(422, $this->hydrator->hydrateObject(ValidationErrorSimple::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Not Found if the authenticated user does not have access to the project
             **/
            case 404:
                return new WithoutBody(404, []);
            /**
             * Not modified
             **/

            case 304:
                return new WithoutBody(304, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
