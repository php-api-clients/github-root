<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertFixed;

/**
 * @property string $createdAt
 * @property ?string $dismissedAt
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert\DismissedBy $dismissedBy
 * @property ?string $dismissedReason
 * @property string $htmlUrl
 * @property ?string $instancesUrl
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert\MostRecentInstance $mostRecentInstance
 * @property int $number
 * @property \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert\Rule $rule
 * @property string $state
 * @property \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertFixed\Alert\Tool $tool
 * @property string $url
 */
interface Alert
{
}
