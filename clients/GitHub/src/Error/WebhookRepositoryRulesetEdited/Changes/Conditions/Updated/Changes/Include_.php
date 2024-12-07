<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes;

use Error;

final class Include_ extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\Include_ $error)
    {
    }
}
