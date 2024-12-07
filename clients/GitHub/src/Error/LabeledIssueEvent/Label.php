<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\LabeledIssueEvent;

use Error;

final class Label extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\LabeledIssueEvent\Label $error)
    {
    }
}
