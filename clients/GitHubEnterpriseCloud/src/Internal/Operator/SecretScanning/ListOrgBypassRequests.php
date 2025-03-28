<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\SecretScanning;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListOrgBypassRequests
{
    public const OPERATION_ID    = 'secret-scanning/list-org-bypass-requests';
    public const OPERATION_MATCH = 'GET /orgs/{org}/bypass-requests/secret-scanning';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\BypassRequests\SecretScanning $hydrator)
    {
    }

    /** @return Observable<Schema\SecretScanningBypassRequest> */
    public function call(string $org, string $repositoryName, string $reviewer, string $requester, string $timePeriod = 'day', string $requestStatus = 'all', int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\SecretScanning\ListOrgBypassRequests($this->responseSchemaValidator, $this->hydrator, $org, $repositoryName, $reviewer, $requester, $timePeriod, $requestStatus, $perPage, $page);
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
