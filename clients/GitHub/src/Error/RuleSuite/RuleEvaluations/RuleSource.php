<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RuleSuite\RuleEvaluations;

use Error;

final class RuleSource extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RuleSuite\RuleEvaluations\RuleSource $error)
    {
    }
}
