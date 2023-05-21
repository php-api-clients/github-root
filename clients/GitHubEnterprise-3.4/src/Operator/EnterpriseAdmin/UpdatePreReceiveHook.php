<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdatePreReceiveHook
{
    public const OPERATION_ID    = 'enterprise-admin/update-pre-receive-hook';
    public const OPERATION_MATCH = 'PATCH /admin/pre-receive-hooks/{pre_receive_hook_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/admin/pre-receive-hooks/{pre_receive_hook_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Admin\PreReceiveHooks\PreReceiveHookId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<PreReceiveHook>
     **/
    public function call(int $preReceiveHookId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\UpdatePreReceiveHook($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $preReceiveHookId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PreReceiveHook {
            return $operation->createResponse($response);
        });
    }
}
