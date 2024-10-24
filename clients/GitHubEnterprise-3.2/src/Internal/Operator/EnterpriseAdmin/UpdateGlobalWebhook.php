<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook2;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateGlobalWebhook
{
    public const OPERATION_ID    = 'enterprise-admin/update-global-webhook';
    public const OPERATION_MATCH = 'PATCH /admin/hooks/{hook_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Admin\Hooks\HookId $hydrator)
    {
    }

    /** @return */
    public function call(int $hookId, string $accept = 'application/vnd.github.superpro-preview+json', array $params): GlobalHook2
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin\UpdateGlobalWebhook($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $hookId, $accept);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GlobalHook2 {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
