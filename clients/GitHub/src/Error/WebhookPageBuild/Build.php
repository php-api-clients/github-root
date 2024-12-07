<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPageBuild;

use Error;

final class Build extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPageBuild\Build $error)
    {
    }
}
