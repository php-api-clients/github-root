<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Checks\Update\Request\ApplicationJson;

use Error;

final class Output extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Checks\Update\Request\ApplicationJson\Output $error)
    {
    }
}
