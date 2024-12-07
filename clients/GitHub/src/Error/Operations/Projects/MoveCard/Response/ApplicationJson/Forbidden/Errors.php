<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Projects\MoveCard\Response\ApplicationJson\Forbidden;

use Error;

final class Errors extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Forbidden\Errors $error)
    {
    }
}
