<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Issues\Create\Request\ApplicationJson\Labels;

use Error;

final class One extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Issues\Create\Request\ApplicationJson\Labels\One $error)
    {
    }
}
