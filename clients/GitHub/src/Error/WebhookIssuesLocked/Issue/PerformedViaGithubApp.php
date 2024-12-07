<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookIssuesLocked\Issue;

use Error;

final class PerformedViaGithubApp extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssuesLocked\Issue\PerformedViaGithubApp $error)
    {
    }
}
