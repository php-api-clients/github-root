<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookIssuesEdited\Issue;

use Error;

final class PerformedViaGithubApp extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue\PerformedViaGithubApp $error)
    {
    }
}
