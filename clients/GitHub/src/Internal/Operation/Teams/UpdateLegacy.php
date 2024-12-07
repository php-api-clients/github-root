<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Teams;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\TeamFull;
use ApiClients\Client\GitHub\Schema\Teams\UpdateLegacy\Request\ApplicationJson;
use ApiClients\Client\GitHub\Schema\ValidationError;
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

final class UpdateLegacy
{
    public const OPERATION_ID    = 'teams/update-legacy';
    public const OPERATION_MATCH = 'PATCH /teams/{team_id}';
    /**The unique identifier of the team. **/
    private int $teamId;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private TeamId $hydrator, int $teamId)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->teamId                  = $teamId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('PATCH', (string) (new UriTemplate('/teams/{team_id}'))->expand(['team_id' => $this->teamId]), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): TeamFull
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response when the updated information already exists
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(TeamFull::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(TeamFull::class, $body);
                    /**
                     * Response
                     **/

                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(TeamFull::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(TeamFull::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ValidationError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\ValidationError(422, $this->hydrator->hydrateObject(ValidationError::class, $body));
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(403, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
