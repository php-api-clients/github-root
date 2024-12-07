<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookProjectEdited\Changes;

use Error;

final class Body extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookProjectEdited\Changes\Body $error)
    {
    }
}
