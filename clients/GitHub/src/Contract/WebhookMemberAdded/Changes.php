<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookMemberAdded;

use ApiClients\Client\GitHub\Schema\WebhookMemberAdded\Changes\Permission;
use ApiClients\Client\GitHub\Schema\WebhookMemberAdded\Changes\RoleName;

/**
 * @property ?Permission $permission
 * @property ?RoleName $roleName
 */
interface Changes
{
}
