<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Users\UpdateAuthenticated\Request;

use Error;

final class ApplicationJson extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Users\UpdateAuthenticated\Request\ApplicationJson $error)
    {
    }
}
