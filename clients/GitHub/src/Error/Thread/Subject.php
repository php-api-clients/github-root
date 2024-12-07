<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Thread;

use Error;

final class Subject extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Thread\Subject $error)
    {
    }
}
