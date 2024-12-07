<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Collaborator;

use Error;

final class Permissions extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Collaborator\Permissions $error)
    {
    }
}
