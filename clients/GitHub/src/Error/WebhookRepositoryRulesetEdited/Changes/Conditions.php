<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookRepositoryRulesetEdited\Changes;

use Error;

final class Conditions extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions $error)
    {
    }
}
