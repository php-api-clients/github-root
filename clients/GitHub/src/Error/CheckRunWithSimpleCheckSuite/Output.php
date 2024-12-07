<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CheckRunWithSimpleCheckSuite;

use Error;

final class Output extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CheckRunWithSimpleCheckSuite\Output $error)
    {
    }
}
