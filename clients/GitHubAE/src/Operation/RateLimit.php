<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\RateLimitOverview;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class RateLimit
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function get(): RateLimitOverview|WithoutBody
    {
        return $this->operators->rateLimit👷Get()->call();
    }
}
