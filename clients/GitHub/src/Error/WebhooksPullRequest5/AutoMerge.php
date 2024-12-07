<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksPullRequest5;

use Error;

final class AutoMerge extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\AutoMerge $error)
    {
    }
}
