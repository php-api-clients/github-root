<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Integration;

use Error;

final class Permissions extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Integration\Permissions $error)
    {
    }
}
