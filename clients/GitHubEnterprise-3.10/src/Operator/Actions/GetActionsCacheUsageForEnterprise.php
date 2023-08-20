<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Actions;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsageOrgEnterprise;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetActionsCacheUsageForEnterprise
{
    public const OPERATION_ID    = 'actions/get-actions-cache-usage-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/cache/usage';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprises/{enterprise}/actions/cache/usage';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\Actions\Cache\Usage $hydrator)
    {
    }

    /** @return */
    public function call(string $enterprise): ActionsCacheUsageOrgEnterprise|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Actions\GetActionsCacheUsageForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsCacheUsageOrgEnterprise|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
