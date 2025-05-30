<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Orgs;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class ListOrgRoleTeams
{
    public const OPERATION_ID    = 'orgs/list-org-role-teams';
    public const OPERATION_MATCH = 'GET /orgs/{org}/organization-roles/{role_id}/teams';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the role. **/
    private int $roleId;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.15/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.15/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Teams $hydrator, string $org, int $roleId, int $perPage = 30, int $page = 1)
    {
        $this->org     = $org;
        $this->roleId  = $roleId;
        $this->perPage = $perPage;
        $this->page    = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{role_id}', '{per_page}', '{page}'], [$this->org, $this->roleId, $this->perPage, $this->page], '/orgs/{org}/organization-roles/{role_id}/teams' . '?per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\TeamRoleAssignment>|WithoutBody */
    public function createResponse(ResponseInterface $response): Observable|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response - List of assigned teams
                     **/
                    case 200:
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\TeamRoleAssignment {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamRoleAssignment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TeamRoleAssignment::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                }

                break;
        }

        switch ($code) {
            /**
             * Response if the organization or role does not exist.
             **/
            case 404:
                return new WithoutBody(404, []);
            /**
             * Response if the organization roles feature is not enabled or validation failed.
             **/

            case 422:
                return new WithoutBody(422, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
