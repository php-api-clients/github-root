<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListPushBypassRequestsListing
{
    public const OPERATION_ID    = 'enterprise-admin/list-push-bypass-requests';
    public const OPERATION_MATCH = 'LIST /enterprises/{enterprise}/bypass-requests/push-rules';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\BypassRequests\PushRules $hydrator)
    {
    }

    /** @return Observable<Schema\PushRuleBypassRequest> */
    public function call(string $enterprise, string $organizationName, string $reviewer, string $requester, string $timePeriod = 'day', string $requestStatus = 'all', int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin\ListPushBypassRequestsListing($this->responseSchemaValidator, $this->hydrator, $enterprise, $organizationName, $reviewer, $requester, $timePeriod, $requestStatus, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
