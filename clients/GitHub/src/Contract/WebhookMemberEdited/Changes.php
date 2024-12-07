<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookMemberEdited;

use ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\OldPermission;
use ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission;

/**
 * @property ?OldPermission $oldPermission
 * @property ?Permission $permission
 */
interface Changes
{
}
