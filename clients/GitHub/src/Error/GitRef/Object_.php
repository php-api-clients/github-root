<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\GitRef;

use Error;

final class Object_ extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\GitRef\Object_ $error)
    {
    }
}
