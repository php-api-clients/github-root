<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Teams;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId;
use ApiClients\Client\GitHub\Schema\Operations\Teams\AddOrUpdateProjectPermissionsInOrg\Response\ApplicationJson\Forbidden\Application\Json;
use ApiClients\Client\GitHub\Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\ApplicationJson;
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

final class AddOrUpdateProjectPermissionsInOrg
{
    public const OPERATION_ID    = 'teams/add-or-update-project-permissions-in-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/teams/{team_slug}/projects/{project_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The unique identifier of the project. **/
    private int $projectId;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private ProjectId $hydrator, string $org, string $teamSlug, int $projectId)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->org                     = $org;
        $this->teamSlug                = $teamSlug;
        $this->projectId               = $projectId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('PUT', (string) (new UriTemplate('/orgs/{org}/teams/{team_slug}/projects/{project_id}'))->expand(['org' => $this->org, 'project_id' => $this->projectId, 'team_slug' => $this->teamSlug]), ['Content-Type' => 'application/json'], json_encode($data));
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
                     * Forbidden if the project is not owned by the organization
                     **/
                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Json::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\Operations\Teams\AddOrUpdateProjectPermissionsInOrg\Response\ApplicationJson\Forbidden\Application\Json(403, $this->hydrator->hydrateObject(Json::class, $body));
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
