<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetPreReceiveHookForRepo
{
    public const OPERATION_ID    = 'enterprise-admin/get-pre-receive-hook-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $preReceiveHookId): RepositoryPreReceiveHook|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\GetPreReceiveHookForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $preReceiveHookId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepositoryPreReceiveHook|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
