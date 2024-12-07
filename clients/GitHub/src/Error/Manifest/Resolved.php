<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Manifest;

use Error;

final class Resolved extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Manifest\Resolved $error)
    {
    }
}
