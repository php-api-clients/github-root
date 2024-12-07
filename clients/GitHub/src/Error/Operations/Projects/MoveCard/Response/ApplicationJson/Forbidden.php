<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Projects\MoveCard\Response\ApplicationJson;

use Error;

final class Forbidden extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Forbidden $error)
    {
    }
}
