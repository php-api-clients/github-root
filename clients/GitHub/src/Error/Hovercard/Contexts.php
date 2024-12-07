<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Hovercard;

use Error;

final class Contexts extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Hovercard\Contexts $error)
    {
    }
}
