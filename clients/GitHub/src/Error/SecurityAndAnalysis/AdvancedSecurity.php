<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\SecurityAndAnalysis;

use Error;

final class AdvancedSecurity extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\SecurityAndAnalysis\AdvancedSecurity $error)
    {
    }
}
