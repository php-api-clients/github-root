<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookRepositoryRulesetEdited\Changes\Conditions;

use Error;

final class Updated extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated $error)
    {
    }
}
