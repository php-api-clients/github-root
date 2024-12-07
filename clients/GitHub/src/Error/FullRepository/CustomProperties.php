<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\FullRepository;

use Error;

final class CustomProperties extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\FullRepository\CustomProperties $error)
    {
    }
}
