<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Import;

use Error;

final class ProjectChoices extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Import\ProjectChoices $error)
    {
    }
}
