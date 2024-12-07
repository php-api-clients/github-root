<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $subjectType
 * @property ?string $subjectName
 * @property ?int $subjectId
 * @property ?int $totalRequestCount
 * @property ?int $rateLimitedRequestCount
 * @property ?string $lastRateLimitedTimestamp
 * @property ?string $lastRequestTimestamp
 */
interface ApiInsightsSubjectStats
{
}
