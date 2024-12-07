<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\WebhooksMembership\User;

/**
 * @property string $organizationUrl
 * @property string $role
 * @property string $state
 * @property string $url
 * @property ?User $user
 */
interface WebhooksMembership
{
}
