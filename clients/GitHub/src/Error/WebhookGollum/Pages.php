<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookGollum;

use Error;

final class Pages extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookGollum\Pages $error)
    {
    }
}
