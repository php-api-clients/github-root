<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

final class AssignUserToOrgRole
{
    public const OPERATION_ID    = 'orgs/assign-user-to-org-role';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/organization-roles/users/{username}/{role_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The handle for the GitHub user account. **/
    private string $username;
    /**The unique identifier of the role. **/
    private int $roleId;

    public function __construct(string $org, string $username, int $roleId)
    {
        $this->org      = $org;
        $this->username = $username;
        $this->roleId   = $roleId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', (string) (new UriTemplate('/orgs/{org}/organization-roles/users/{username}/{role_id}'))->expand(['org' => $this->org, 'role_id' => $this->roleId, 'username' => $this->username]));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * Response if the organization, user or role does not exist.
             **/

            case 404:
                return new WithoutBody(404, []);
            /**
             * Response if the organization roles feature is not enabled enabled for the organization, the validation failed, or the user is not an organization member.
             **/

            case 422:
                return new WithoutBody(422, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
