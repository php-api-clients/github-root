<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Copilot;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Members\Username\Copilot;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CopilotSeatDetails;
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

final class GetCopilotSeatDetailsForUser
{
    public const OPERATION_ID    = 'copilot/get-copilot-seat-details-for-user';
    public const OPERATION_MATCH = 'GET /orgs/{org}/members/{username}/copilot';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The handle for the GitHub user account. **/
    private string $username;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Copilot $hydrator, string $org, string $username)
    {
        $this->org                     = $org;
        $this->username                = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/members/{username}/copilot'))->expand(['org' => $this->org, 'username' => $this->username]));
    }

    public function createResponse(ResponseInterface $response): CopilotSeatDetails|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * The user's GitHub Copilot seat details, including usage.
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CopilotSeatDetails::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(CopilotSeatDetails::class, $body);
                    /**
                     * Internal Error
                     **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(500, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Requires authentication
                     **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(401, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(403, $this->hydrator->hydrateObject(BasicError::class, $body));
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
             * Copilot Business or Enterprise is not enabled for this organization or the user has a pending organization invitation.
             **/
            case 422:
                return new WithoutBody(422, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
