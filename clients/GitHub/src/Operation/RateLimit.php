<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal\Operators;
use ApiClients\Client\GitHub\Schema\RateLimitOverview;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class RateLimit
{
    public function __construct(public Operators $operators)
    {
    }

    /** @return */
    public function get(): RateLimitOverview|WithoutBody
    {
        return $this->operators->rateLimit👷Get()->call();
    }
}
