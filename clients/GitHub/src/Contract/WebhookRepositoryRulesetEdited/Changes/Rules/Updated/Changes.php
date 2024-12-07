<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookRepositoryRulesetEdited\Changes\Rules\Updated;

use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\Configuration;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\Pattern;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes\RuleType;

/**
 * @property ?Configuration $configuration
 * @property ?RuleType $ruleType
 * @property ?Pattern $pattern
 */
interface Changes
{
}
