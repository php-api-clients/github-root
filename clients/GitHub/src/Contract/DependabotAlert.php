<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\DependabotAlert\Dependency;
use ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory;
use ApiClients\Client\GitHub\Schema\DependabotAlertSecurityVulnerability;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $number
 * @property string $state
 * @property Dependency $dependency
 * @property DependabotAlertSecurityAdvisory $securityAdvisory
 * @property DependabotAlertSecurityVulnerability $securityVulnerability
 * @property string $url
 * @property string $htmlUrl
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $dismissedAt
 * @property ?SimpleUser $dismissedBy
 * @property ?string $dismissedReason
 * @property ?string $dismissedComment
 * @property ?string $fixedAt
 * @property ?string $autoDismissedAt
 */
interface DependabotAlert
{
}
