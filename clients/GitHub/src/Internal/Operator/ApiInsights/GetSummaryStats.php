<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\ApiInsights;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SummaryStats;
use ApiClients\Client\GitHub\Schema\ApiInsightsSummaryStats;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetSummaryStats
{
    public const OPERATION_ID    = 'api-insights/get-summary-stats';
    public const OPERATION_MATCH = 'GET /orgs/{org}/insights/api/summary-stats';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private SummaryStats $hydrator)
    {
    }

    /** @return */
    public function call(string $org, string $minTimestamp, string $maxTimestamp): ApiInsightsSummaryStats
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\ApiInsights\GetSummaryStats($this->responseSchemaValidator, $this->hydrator, $org, $minTimestamp, $maxTimestamp);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ApiInsightsSummaryStats {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
