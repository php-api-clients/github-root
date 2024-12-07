<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertCreated;

/**
 * @property ?string $createdAt
 * @property string $dismissedAt
 * @property string $dismissedBy
 * @property ?string $dismissedComment
 * @property string $dismissedReason
 * @property string $fixedAt
 * @property string $htmlUrl
 * @property ?string $instancesUrl
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\MostRecentInstance $mostRecentInstance
 * @property int $number
 * @property \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Rule $rule
 * @property ?string $state
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Tool $tool
 * @property ?string $updatedAt
 * @property string $url
 */
interface Alert
{
}
