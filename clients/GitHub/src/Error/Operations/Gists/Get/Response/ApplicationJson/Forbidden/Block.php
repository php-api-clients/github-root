<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Gists\Get\Response\ApplicationJson\Forbidden;

use Error;

final class Block extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Gists\Get\Response\ApplicationJson\Forbidden\Block $error)
    {
    }
}
