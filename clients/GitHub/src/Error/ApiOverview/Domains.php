<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\ApiOverview;

use Error;

final class Domains extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ApiOverview\Domains $error)
    {
    }
}
