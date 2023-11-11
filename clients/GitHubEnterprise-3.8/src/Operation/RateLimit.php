<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class RateLimit
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function get(): RateLimitOverview|WithoutBody
    {
        return $this->operators->rateLimit👷Get()->call();
    }
}
