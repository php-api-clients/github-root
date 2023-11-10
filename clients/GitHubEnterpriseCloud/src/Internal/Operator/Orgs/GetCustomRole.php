<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Orgs;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetCustomRole
{
    public const OPERATION_ID    = 'orgs/get-custom-role';
    public const OPERATION_MATCH = 'GET /orgs/{org}/custom_roles/{role_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\CustomRoles\RoleId $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $roleId): OrganizationCustomRepositoryRole
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Orgs\GetCustomRole($this->responseSchemaValidator, $this->hydrator, $org, $roleId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrganizationCustomRepositoryRole {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
