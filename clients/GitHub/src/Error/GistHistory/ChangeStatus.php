<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\GistHistory;

use Error;

final class ChangeStatus extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\GistHistory\ChangeStatus $error)
    {
    }
}
