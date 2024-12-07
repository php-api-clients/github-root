<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Migrations;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Migration;
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

final class GetStatusForOrg
{
    public const OPERATION_ID    = 'migrations/get-status-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/migrations/{migration_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the migration. **/
    private int $migrationId;
    /**Exclude attributes from the API response to improve performance **/
    private array $exclude;

    public function __construct(private SchemaValidator $responseSchemaValidator, private MigrationId $hydrator, string $org, int $migrationId, array $exclude)
    {
        $this->org                     = $org;
        $this->migrationId             = $migrationId;
        $this->exclude                 = $exclude;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/migrations/{migration_id}{?exclude*}'))->expand(['exclude' => $this->exclude, 'migration_id' => $this->migrationId, 'org' => $this->org]));
    }

    public function createResponse(ResponseInterface $response): Migration
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * *   `pending`, which means the migration hasn't started yet.
                    *   `exporting`, which means the migration is in progress.
                    *   `exported`, which means the migration finished successfully.
                    *   `failed`, which means the migration failed.
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Migration::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(Migration::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
