<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Operators;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview;

final class RateLimit
{
    public function __construct(private Operators $operators)
    {
    }

    /** @return Schema\RateLimitOverview|array{code:int} */
    public function get(): RateLimitOverview|array
    {
        return $this->operators->rateLimit👷Get()->call();
    }
}
