<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RuleSuite;

use Error;

final class RuleEvaluations extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RuleSuite\RuleEvaluations $error)
    {
    }
}
