<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertAppearedInBranch;

/**
 * @property string $createdAt
 * @property ?string $dismissedAt
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\DismissedBy $dismissedBy
 * @property ?string $dismissedReason
 * @property string $htmlUrl
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance $mostRecentInstance
 * @property int $number
 * @property \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Rule $rule
 * @property string $state
 * @property \ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool $tool
 * @property string $url
 */
interface Alert
{
}
