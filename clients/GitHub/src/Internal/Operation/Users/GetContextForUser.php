<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Users;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Hovercard;
use ApiClients\Client\GitHub\Schema\BasicError;
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

final class GetContextForUser
{
    public const OPERATION_ID    = 'users/get-context-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/hovercard';
    /**The handle for the GitHub user account. **/
    private string $username;
    /**Identifies which additional information you'd like to receive about the person's hovercard. Can be `organization`, `repository`, `issue`, `pull_request`. **Required** when using `subject_id`. **/
    private string $subjectType;
    /**Uses the ID for the `subject_type` you specified. **Required** when using `subject_type`. **/
    private string $subjectId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Hovercard $hydrator, string $username, string $subjectType, string $subjectId)
    {
        $this->username                = $username;
        $this->subjectType             = $subjectType;
        $this->subjectId               = $subjectId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/users/{username}/hovercard{?subject_id,subject_type}'))->expand(['subject_id' => $this->subjectId, 'subject_type' => $this->subjectType, 'username' => $this->username]));
    }

    public function createResponse(ResponseInterface $response): \ApiClients\Client\GitHub\Schema\Hovercard
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(\ApiClients\Client\GitHub\Schema\Hovercard::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(\ApiClients\Client\GitHub\Schema\Hovercard::class, $body);
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
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
