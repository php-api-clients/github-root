<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property ?string $login
 * @property ?string $email
 * @property string $role
 * @property string $createdAt
 * @property ?string $failedAt
 * @property ?string $failedReason
 * @property SimpleUser $inviter
 * @property int $teamCount
 * @property string $nodeId
 * @property string $invitationTeamsUrl
 * @property ?string $invitationSource
 */
interface OrganizationInvitation
{
}
