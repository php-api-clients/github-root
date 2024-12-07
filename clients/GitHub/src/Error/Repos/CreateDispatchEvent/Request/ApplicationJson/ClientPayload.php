<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Repos\CreateDispatchEvent\Request\ApplicationJson;

use Error;

final class ClientPayload extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Repos\CreateDispatchEvent\Request\ApplicationJson\ClientPayload $error)
    {
    }
}
