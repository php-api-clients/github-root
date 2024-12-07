<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CodeownersErrors;

use Error;

final class Errors extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CodeownersErrors\Errors $error)
    {
    }
}
