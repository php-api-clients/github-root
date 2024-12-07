<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookIssueCommentCreated\Issue;

use Error;

final class Reactions extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\Reactions $error)
    {
    }
}
