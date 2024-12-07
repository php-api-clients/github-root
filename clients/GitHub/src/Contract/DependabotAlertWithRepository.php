<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $number
 * @property string $state
 * @property \ApiClients\Client\GitHub\Schema\DependabotAlertWithRepository\Dependency $dependency
 * @property \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory $securityAdvisory
 * @property \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability $securityVulnerability
 * @property string $url
 * @property string $htmlUrl
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $dismissedAt
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $dismissedBy
 * @property ?string $dismissedReason
 * @property ?string $dismissedComment
 * @property ?string $fixedAt
 * @property ?string $autoDismissedAt
 * @property \ApiClients\Client\GitHub\Schema\SimpleRepository $repository
 */
interface DependabotAlertWithRepository
{
}
