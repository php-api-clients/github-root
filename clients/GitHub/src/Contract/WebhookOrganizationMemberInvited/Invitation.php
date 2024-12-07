<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookOrganizationMemberInvited;

use ApiClients\Client\GitHub\Schema\WebhookOrganizationMemberInvited\Invitation\Inviter;

/**
 * @property string $createdAt
 * @property ?string $email
 * @property ?string $failedAt
 * @property ?string $failedReason
 * @property int|float $id
 * @property string $invitationTeamsUrl
 * @property ?Inviter $inviter
 * @property ?string $login
 * @property string $nodeId
 * @property string $role
 * @property int|float $teamCount
 * @property ?string $invitationSource
 */
interface Invitation
{
}
