<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryRuleset\Links;

use Error;

final class Self_ extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Self_ $error)
    {
    }
}
