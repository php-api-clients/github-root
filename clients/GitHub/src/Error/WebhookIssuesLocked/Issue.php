<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookIssuesLocked;

use Error;

final class Issue extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue $error)
    {
    }
}
