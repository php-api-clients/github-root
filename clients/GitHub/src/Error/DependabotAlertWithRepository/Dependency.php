<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\DependabotAlertWithRepository;

use Error;

final class Dependency extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\DependabotAlertWithRepository\Dependency $error)
    {
    }
}
