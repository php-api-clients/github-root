<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookRepositoryRulesetEdited;

use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Enforcement;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Name;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules;

/**
 * @property ?Name $name
 * @property ?Enforcement $enforcement
 * @property ?Conditions $conditions
 * @property ?Rules $rules
 */
interface Changes
{
}
