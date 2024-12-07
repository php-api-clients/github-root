<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\PullRequestMinimal;

use Error;

final class Head extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head $error)
    {
    }
}
