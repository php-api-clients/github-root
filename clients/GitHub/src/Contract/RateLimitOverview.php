<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\RateLimit;
use ApiClients\Client\GitHub\Schema\RateLimitOverview\Resources;

/**
 * @property Resources $resources
 * @property RateLimit $rate
 */
interface RateLimitOverview
{
}
