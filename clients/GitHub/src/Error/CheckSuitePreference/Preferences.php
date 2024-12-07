<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CheckSuitePreference;

use Error;

final class Preferences extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CheckSuitePreference\Preferences $error)
    {
    }
}
