<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $actorType
 * @property ?string $actorName
 * @property ?int $actorId
 * @property ?int $integrationId
 * @property ?int $oauthApplicationId
 * @property ?int $totalRequestCount
 * @property ?int $rateLimitedRequestCount
 * @property ?string $lastRateLimitedTimestamp
 * @property ?string $lastRequestTimestamp
 */
interface ApiInsightsUserStats
{
}
