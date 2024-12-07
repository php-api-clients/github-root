<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertReopenedByUser;

/**
 * @property string $createdAt
 * @property string $dismissedAt
 * @property string $dismissedBy
 * @property string $dismissedReason
 * @property string $htmlUrl
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert\MostRecentInstance $mostRecentInstance
 * @property int $number
 * @property \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert\Rule $rule
 * @property string $state
 * @property \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert\Tool $tool
 * @property string $url
 */
interface Alert
{
}
