<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdatePreReceiveHookEnforcementForRepo
{
    public const OPERATION_ID    = 'enterprise-admin/update-pre-receive-hook-enforcement-for-repo';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $preReceiveHookId, array $params): RepositoryPreReceiveHook
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $preReceiveHookId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepositoryPreReceiveHook {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
