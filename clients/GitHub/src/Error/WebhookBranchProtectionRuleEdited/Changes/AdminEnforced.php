<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookBranchProtectionRuleEdited\Changes;

use Error;

final class AdminEnforced extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced $error)
    {
    }
}
