<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $assignee
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimple $organization
 * @property null|\ApiClients\Client\GitHub\Schema\Team|\ApiClients\Client\GitHub\Schema\EnterpriseTeam $assigningTeam
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
