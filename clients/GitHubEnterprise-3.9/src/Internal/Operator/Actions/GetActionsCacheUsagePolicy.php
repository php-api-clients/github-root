<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Actions;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyForRepository;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetActionsCacheUsagePolicy
{
    public const OPERATION_ID    = 'actions/get-actions-cache-usage-policy';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/cache/usage-policy';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\UsagePolicy $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo): ActionsCacheUsagePolicyForRepository|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions\GetActionsCacheUsagePolicy($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsCacheUsagePolicyForRepository|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
