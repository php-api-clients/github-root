<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Team;

use Error;

final class Permissions extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Team\Permissions $error)
    {
    }
}
