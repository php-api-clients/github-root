<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\RateLimitOverview;

final class RateLimit
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\RateLimitOverview|array{code:int} */
    public function get(): RateLimitOverview|array
    {
        return $this->operators->rateLimit👷Get()->call();
    }
}
