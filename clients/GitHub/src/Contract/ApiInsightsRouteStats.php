<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $httpMethod
 * @property ?string $apiRoute
 * @property ?int $totalRequestCount
 * @property ?int $rateLimitedRequestCount
 * @property ?string $lastRateLimitedTimestamp
 * @property ?string $lastRequestTimestamp
 */
interface ApiInsightsRouteStats
{
}
