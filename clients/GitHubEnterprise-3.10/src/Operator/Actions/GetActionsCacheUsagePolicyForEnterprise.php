<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Actions;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyEnterprise;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetActionsCacheUsagePolicyForEnterprise
{
    public const OPERATION_ID    = 'actions/get-actions-cache-usage-policy-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/cache/usage-policy';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprises/{enterprise}/actions/cache/usage-policy';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\Actions\Cache\UsagePolicy $hydrator)
    {
    }

    /** @return PromiseInterface<ActionsCacheUsagePolicyEnterprise> **/
    public function call(string $enterprise): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Actions\GetActionsCacheUsagePolicyForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsCacheUsagePolicyEnterprise {
            return $operation->createResponse($response);
        });
    }
}
