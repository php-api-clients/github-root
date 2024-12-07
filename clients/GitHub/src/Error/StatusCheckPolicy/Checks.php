<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\StatusCheckPolicy;

use Error;

final class Checks extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\StatusCheckPolicy\Checks $error)
    {
    }
}
