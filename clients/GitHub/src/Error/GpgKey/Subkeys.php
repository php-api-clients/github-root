<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\GpgKey;

use Error;

final class Subkeys extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\GpgKey\Subkeys $error)
    {
    }
}
