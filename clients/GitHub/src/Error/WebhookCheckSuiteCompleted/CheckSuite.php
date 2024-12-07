<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookCheckSuiteCompleted;

use Error;

final class CheckSuite extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite $error)
    {
    }
}
