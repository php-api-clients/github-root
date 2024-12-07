<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Codespace;

use Error;

final class GitStatus extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Codespace\GitStatus $error)
    {
    }
}
