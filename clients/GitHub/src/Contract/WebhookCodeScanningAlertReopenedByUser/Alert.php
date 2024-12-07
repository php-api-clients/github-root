<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertReopenedByUser;

use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert\MostRecentInstance;
use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert\Rule;
use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertReopenedByUser\Alert\Tool;

/**
 * @property string $createdAt
 * @property string $dismissedAt
 * @property string $dismissedBy
 * @property string $dismissedReason
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
