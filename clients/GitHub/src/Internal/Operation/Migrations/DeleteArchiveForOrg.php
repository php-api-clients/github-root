<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Migrations;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive;
use ApiClients\Client\GitHub\Schema\BasicError;
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

final class DeleteArchiveForOrg
{
    public const OPERATION_ID    = 'migrations/delete-archive-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/migrations/{migration_id}/archive';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the migration. **/
    private int $migrationId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Archive $hydrator, string $org, int $migrationId)
    {
        $this->org                     = $org;
        $this->migrationId             = $migrationId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', (string) (new UriTemplate('/orgs/{org}/migrations/{migration_id}/archive'))->expand(['migration_id' => $this->migrationId, 'org' => $this->org]));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
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
