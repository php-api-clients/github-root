<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $action
 * @property SimpleUser $sender
 */
interface WebhookGithubAppAuthorizationRevoked
{
}
