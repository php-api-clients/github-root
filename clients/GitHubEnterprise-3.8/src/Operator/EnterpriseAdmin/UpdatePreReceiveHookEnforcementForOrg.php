<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdatePreReceiveHookEnforcementForOrg
{
    public const OPERATION_ID    = 'enterprise-admin/update-pre-receive-hook-enforcement-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId $hydrator)
    {
    }

    /** @return PromiseInterface<OrgPreReceiveHook> **/
    public function call(string $org, int $preReceiveHookId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $preReceiveHookId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrgPreReceiveHook {
            return $operation->createResponse($response);
        });
    }
}
