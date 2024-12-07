<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Git\CreateTree\Request\ApplicationJson;

use Error;

final class Tree extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Git\CreateTree\Request\ApplicationJson\Tree $error)
    {
    }
}
