<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Users\GetAuthenticated\Response\ApplicationJson;

use Error;

final class Ok extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Users\GetAuthenticated\Response\ApplicationJson\Ok $error)
    {
    }
}
