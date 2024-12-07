<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Checks\SetSuitesPreferences\Request\ApplicationJson;

use Error;

final class AutoTriggerChecks extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Checks\SetSuitesPreferences\Request\ApplicationJson\AutoTriggerChecks $error)
    {
    }
}
