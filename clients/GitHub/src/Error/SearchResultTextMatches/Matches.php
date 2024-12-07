<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\SearchResultTextMatches;

use Error;

final class Matches extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\SearchResultTextMatches\Matches $error)
    {
    }
}
