<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertClosedByUser;

/**
 * @property string $createdAt
 * @property string $dismissedAt
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\DismissedBy $dismissedBy
 * @property ?string $dismissedReason
 * @property string $htmlUrl
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\MostRecentInstance $mostRecentInstance
 * @property int $number
 * @property \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Rule $rule
 * @property string $state
 * @property \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertClosedByUser\Alert\Tool $tool
 * @property string $url
 */
interface Alert
{
}
