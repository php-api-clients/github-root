<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\RuleSuite;

use ApiClients\Client\GitHub\Schema\RuleSuite\RuleEvaluations\RuleSource;

/**
 * @property ?RuleSource $ruleSource
 * @property ?string $enforcement
 * @property ?string $result
 * @property ?string $ruleType
 * @property ?string $details
 */
interface RuleEvaluations
{
}
