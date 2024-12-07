<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseTeam;
use ApiClients\Client\GitHub\Schema\OrganizationSimple;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\Team;

/**
 * @property SimpleUser $assignee
 * @property ?OrganizationSimple $organization
 * @property Team|EnterpriseTeam|null $assigningTeam
 * @property ?string $pendingCancellationDate
 * @property ?string $lastActivityAt
 * @property ?string $lastActivityEditor
 * @property string $createdAt
 * @property ?string $updatedAt
 * @property ?string $planType
 */
interface CopilotSeatDetails
{
}
