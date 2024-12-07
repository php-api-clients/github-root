<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookSecurityAndAnalysis\Changes;

use Error;

final class From extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookSecurityAndAnalysis\Changes\From $error)
    {
    }
}
