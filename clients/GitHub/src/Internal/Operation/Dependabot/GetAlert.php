<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Dependabot;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetAlert
{
    public const OPERATION_ID    = 'dependabot/get-alert';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependabot/alerts/{alert_number}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The number that identifies a Dependabot alert in its repository.
    You can find this at the end of the URL for a Dependabot alert within GitHub,
    or in `number` fields in the response from the
    `GET /repos/{owner}/{repo}/dependabot/alerts` operation. **/
    private int $alertNumber;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber $hydrator, string $owner, string $repo, int $alertNumber)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->alertNumber = $alertNumber;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{alert_number}'], [$this->owner, $this->repo, $this->alertNumber], '/repos/{owner}/{repo}/dependabot/alerts/{alert_number}'));
    }

    public function createResponse(ResponseInterface $response): Schema\DependabotAlert|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\DependabotAlert::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\DependabotAlert::class, $body);
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Not modified
             **/
            case 304:
                return new WithoutBody(304, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
