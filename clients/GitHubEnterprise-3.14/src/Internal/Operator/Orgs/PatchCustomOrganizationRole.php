<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Orgs;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationRole;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class PatchCustomOrganizationRole
{
    public const OPERATION_ID    = 'orgs/patch-custom-organization-role';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/organization-roles/{role_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $roleId, array $params): OrganizationRole
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Orgs\PatchCustomOrganizationRole($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $roleId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrganizationRole {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
