<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertFixed;

use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert\DismissedBy;
use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert\MostRecentInstance;
use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert\Rule;
use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert\Tool;

/**
 * @property string $createdAt
 * @property ?string $dismissedAt
 * @property ?DismissedBy $dismissedBy
 * @property ?string $dismissedReason
 * @property string $htmlUrl
 * @property ?string $instancesUrl
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
