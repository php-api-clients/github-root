<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property \ApiClients\Client\GitHub\Schema\MinimalRepository $repository
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $invitee
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $inviter
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
