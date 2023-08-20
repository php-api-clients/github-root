<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetIssueStats
{
    public const OPERATION_ID    = 'enterprise-admin/get-issue-stats';
    public const OPERATION_MATCH = 'GET /enterprise/stats/issues';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprise/stats/issues';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprise\Stats\Issues $hydrator)
    {
    }

    /** @return */
    public function call(): EnterpriseIssueOverview|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\GetIssueStats($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseIssueOverview|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
