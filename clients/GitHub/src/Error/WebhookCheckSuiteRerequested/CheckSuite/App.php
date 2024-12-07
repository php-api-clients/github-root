<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookCheckSuiteRerequested\CheckSuite;

use Error;

final class App extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App $error)
    {
    }
}
