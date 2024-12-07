<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryRuleset\Links;

use Error;

final class Html extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Html $error)
    {
    }
}
