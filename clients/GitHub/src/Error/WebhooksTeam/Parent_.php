<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksTeam;

use Error;

final class Parent_ extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksTeam\Parent_ $error)
    {
    }
}
