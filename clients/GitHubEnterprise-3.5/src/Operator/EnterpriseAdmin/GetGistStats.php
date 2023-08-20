<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetGistStats
{
    public const OPERATION_ID    = 'enterprise-admin/get-gist-stats';
    public const OPERATION_MATCH = 'GET /enterprise/stats/gists';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprise/stats/gists';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprise\Stats\Gists $hydrator)
    {
    }

    /** @return */
    public function call(): EnterpriseGistOverview|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\GetGistStats($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseGistOverview|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
