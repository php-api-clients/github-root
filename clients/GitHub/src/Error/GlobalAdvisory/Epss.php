<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\GlobalAdvisory;

use Error;

final class Epss extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\GlobalAdvisory\Epss $error)
    {
    }
}
