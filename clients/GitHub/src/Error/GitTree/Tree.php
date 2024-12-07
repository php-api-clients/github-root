<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\GitTree;

use Error;

final class Tree extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\GitTree\Tree $error)
    {
    }
}
