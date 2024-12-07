<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\ContentTree;

use Error;

final class Entries extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ContentTree\Entries $error)
    {
    }
}
