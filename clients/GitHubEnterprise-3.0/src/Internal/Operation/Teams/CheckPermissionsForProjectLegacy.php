<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Teams;

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
use function str_replace;

final class CheckPermissionsForProjectLegacy
{
    public const OPERATION_ID    = 'teams/check-permissions-for-project-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/projects/{project_id}';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Teams\TeamId\Projects\ProjectId $hydrator, private int $teamId, private int $projectId)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{team_id}', '{project_id}'], [$this->teamId, $this->projectId], '/teams/{team_id}/projects/{project_id}'));
    }

    public function createResponse(ResponseInterface $response): Schema\TeamProject|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamProject::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\TeamProject::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Not Found if project is not managed by this team
             **/
            case 404:
                return new WithoutBody(404, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
