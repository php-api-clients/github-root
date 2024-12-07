<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\MilestonedIssueEvent;

use Error;

final class Milestone extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\MilestonedIssueEvent\Milestone $error)
    {
    }
}
