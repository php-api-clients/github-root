<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListProvisionedGroupsEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/list-provisioned-groups-enterprise';
    public const OPERATION_MATCH = 'GET /scim/v2/Groups';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Scim\V2\Groups $hydrator)
    {
    }

    /** @return Schema\ScimEnterpriseGroupList|array{code:int} */
    public function call(string $filter, string $excludedAttributes, int $startIndex = 1, int $count = 30): ScimEnterpriseGroupList|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin\ListProvisionedGroupsEnterprise($this->responseSchemaValidator, $this->hydrator, $filter, $excludedAttributes, $startIndex, $count);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ScimEnterpriseGroupList|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
