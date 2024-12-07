<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property ?string $nodeId
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser|\ApiClients\Client\GitHub\Schema\Enterprise $account
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $requester
 * @property string $createdAt
 */
interface IntegrationInstallationRequest
{
}
