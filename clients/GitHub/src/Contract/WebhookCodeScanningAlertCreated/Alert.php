<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertCreated;

use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\MostRecentInstance;
use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Rule;
use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert\Tool;

/**
 * @property ?string $createdAt
 * @property string $dismissedAt
 * @property string $dismissedBy
 * @property ?string $dismissedComment
 * @property string $dismissedReason
 * @property string $fixedAt
 * @property string $htmlUrl
 * @property ?string $instancesUrl
 * @property ?MostRecentInstance $mostRecentInstance
 * @property int $number
 * @property Rule $rule
 * @property ?string $state
 * @property ?Tool $tool
 * @property ?string $updatedAt
 * @property string $url
 */
interface Alert
{
}
