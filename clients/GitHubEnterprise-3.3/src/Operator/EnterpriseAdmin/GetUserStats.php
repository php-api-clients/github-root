<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetUserStats
{
    public const OPERATION_ID    = 'enterprise-admin/get-user-stats';
    public const OPERATION_MATCH = 'GET /enterprise/stats/users';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprise/stats/users';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprise\Stats\Users $hydrator)
    {
    }

    /** @return */
    public function call(): EnterpriseUserOverview|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\GetUserStats($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseUserOverview|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
