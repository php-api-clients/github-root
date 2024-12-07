<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\GitCommit;

use Error;

final class Tree extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\GitCommit\Tree $error)
    {
    }
}
