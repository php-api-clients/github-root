<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Repos\CreateWebhook\Request\ApplicationJson;

use Error;

final class Config extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Repos\CreateWebhook\Request\ApplicationJson\Config $error)
    {
    }
}
