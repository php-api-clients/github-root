<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertReopened;

use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert\DismissedBy;
use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert\MostRecentInstance;
use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert\Rule;
use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopened\Alert\Tool;

/**
 * @property string $createdAt
 * @property ?string $dismissedAt
 * @property ?DismissedBy $dismissedBy
 * @property ?string $dismissedReason
 * @property string $htmlUrl
 * @property ?MostRecentInstance $mostRecentInstance
 * @property int $number
 * @property Rule $rule
 * @property string $state
 * @property Tool $tool
 * @property string $url
 */
interface Alert
{
}
