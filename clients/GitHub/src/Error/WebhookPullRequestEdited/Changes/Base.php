<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPullRequestEdited\Changes;

use Error;

final class Base extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes\Base $error)
    {
    }
}
