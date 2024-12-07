<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\MinimalRepository;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property MinimalRepository $repository
 * @property ?SimpleUser $invitee
 * @property ?SimpleUser $inviter
 * @property string $permissions
 * @property string $createdAt
 * @property ?bool $expired
 * @property string $url
 * @property string $htmlUrl
 * @property string $nodeId
 */
interface RepositoryInvitation
{
}
