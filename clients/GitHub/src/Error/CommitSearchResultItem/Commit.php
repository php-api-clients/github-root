<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CommitSearchResultItem;

use Error;

final class Commit extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CommitSearchResultItem\Commit $error)
    {
    }
}
