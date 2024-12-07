<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $number
 * @property string $createdAt
 * @property ?string $updatedAt
 * @property string $url
 * @property string $htmlUrl
 * @property string $instancesUrl
 * @property ?string $state
 * @property ?string $fixedAt
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $dismissedBy
 * @property ?string $dismissedAt
 * @property ?string $dismissedReason
 * @property ?string $dismissedComment
 * @property \ApiClients\Client\GitHub\Schema\CodeScanningAlertRuleSummary $rule
 * @property \ApiClients\Client\GitHub\Schema\CodeScanningAnalysisTool $tool
 * @property \ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance $mostRecentInstance
 */
interface CodeScanningAlertItems
{
}
