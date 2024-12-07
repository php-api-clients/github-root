<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertReopened;

/**
 * @property string $createdAt
 * @property ?string $dismissedAt
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert\DismissedBy $dismissedBy
 * @property ?string $dismissedReason
 * @property string $htmlUrl
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert\MostRecentInstance $mostRecentInstance
 * @property int $number
 * @property \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert\Rule $rule
 * @property string $state
 * @property \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert\Tool $tool
 * @property string $url
 */
interface Alert
{
}
