<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Git\CreateTag\Request\ApplicationJson;

use Error;

final class Tagger extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Git\CreateTag\Request\ApplicationJson\Tagger $error)
    {
    }
}
