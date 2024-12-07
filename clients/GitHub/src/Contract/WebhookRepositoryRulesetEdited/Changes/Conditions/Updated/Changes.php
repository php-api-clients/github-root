<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated;

use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\ConditionType;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\Exclude;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\Include_;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\Target;

/**
 * @property ?ConditionType $conditionType
 * @property ?Target $target
 * @property ?Include_ $include
 * @property ?Exclude $exclude
 */
interface Changes
{
}
