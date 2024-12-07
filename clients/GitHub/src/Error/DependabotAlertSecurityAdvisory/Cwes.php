<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\DependabotAlertSecurityAdvisory;

use Error;

final class Cwes extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cwes $error)
    {
    }
}
