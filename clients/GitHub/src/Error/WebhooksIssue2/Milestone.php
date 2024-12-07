<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksIssue2;

use Error;

final class Milestone extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksIssue2\Milestone $error)
    {
    }
}
