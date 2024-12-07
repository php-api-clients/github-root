<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Enterprise;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property ?string $nodeId
 * @property SimpleUser|Enterprise $account
 * @property SimpleUser $requester
 * @property string $createdAt
 */
interface IntegrationInstallationRequest
{
}
