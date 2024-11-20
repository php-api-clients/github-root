<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\ApiInsights;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetRouteStatsByActorListing
{
    public const OPERATION_ID    = 'api-insights/get-route-stats-by-actor';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/insights/api/route-stats/{actor_type}/{actor_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Insights\Api\RouteStats\ActorType\ActorId $hydrator)
    {
    }

    /** @return iterable<int,Schema\ApiInsightsRouteStats> */
    public function call(string $org, string $actorType, int $actorId, string $minTimestamp, string $maxTimestamp, array $sort, int $page = 1, int $perPage = 30, string $direction = 'desc'): iterable
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\ApiInsights\GetRouteStatsByActorListing($this->responseSchemaValidator, $this->hydrator, $org, $actorType, $actorId, $minTimestamp, $maxTimestamp, $sort, $page, $perPage, $direction);
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
