<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Snapshot;

use Error;

final class Detector extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Snapshot\Detector $error)
    {
    }
}
