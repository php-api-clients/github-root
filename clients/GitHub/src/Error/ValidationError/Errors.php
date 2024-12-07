<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\ValidationError;

use Error;

final class Errors extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ValidationError\Errors $error)
    {
    }
}
