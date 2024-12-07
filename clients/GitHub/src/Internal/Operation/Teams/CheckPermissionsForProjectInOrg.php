<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Teams;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId;
use ApiClients\Client\GitHub\Schema\TeamProject;
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

final class CheckPermissionsForProjectInOrg
{
    public const OPERATION_ID    = 'teams/check-permissions-for-project-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/projects/{project_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The unique identifier of the project. **/
    private int $projectId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private ProjectId $hydrator, string $org, string $teamSlug, int $projectId)
    {
        $this->org                     = $org;
        $this->teamSlug                = $teamSlug;
        $this->projectId               = $projectId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/teams/{team_slug}/projects/{project_id}'))->expand(['org' => $this->org, 'project_id' => $this->projectId, 'team_slug' => $this->teamSlug]));
    }

    public function createResponse(ResponseInterface $response): TeamProject|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(TeamProject::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(TeamProject::class, $body);
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
