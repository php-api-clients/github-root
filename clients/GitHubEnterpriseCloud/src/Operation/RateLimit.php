<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RateLimitOverview;

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
