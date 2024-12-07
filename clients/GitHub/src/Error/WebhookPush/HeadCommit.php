<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPush;

use Error;

final class HeadCommit extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit $error)
    {
    }
}
