<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance;
use ApiClients\Client\GitHub\Schema\CodeScanningAlertRule;
use ApiClients\Client\GitHub\Schema\CodeScanningAnalysisTool;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $number
 * @property string $createdAt
 * @property ?string $updatedAt
 * @property string $url
 * @property string $htmlUrl
 * @property string $instancesUrl
 * @property ?string $state
 * @property ?string $fixedAt
 * @property ?SimpleUser $dismissedBy
 * @property ?string $dismissedAt
 * @property ?string $dismissedReason
 * @property ?string $dismissedComment
 * @property CodeScanningAlertRule $rule
 * @property CodeScanningAnalysisTool $tool
 * @property CodeScanningAlertInstance $mostRecentInstance
 */
interface CodeScanningAlert
{
}
