<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\PackageVersion\Metadata;

use Error;

final class Docker extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker $error)
    {
    }
}
