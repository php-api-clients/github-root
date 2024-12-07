<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPing\Hook;

use Error;

final class Config extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPing\Hook\Config $error)
    {
    }
}
