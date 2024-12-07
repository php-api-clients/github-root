<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookRepositoryTransferred\Changes\Owner;

use ApiClients\Client\GitHub\Schema\WebhookRepositoryTransferred\Changes\Owner\From\Organization;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryTransferred\Changes\Owner\From\User;

/**
 * @property ?Organization $organization
 * @property ?User $user
 */
interface From
{
}
