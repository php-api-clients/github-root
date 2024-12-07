<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertAppearedInBranch\Alert;

use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location;
use ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Message;

/**
 * @property string $analysisKey
 * @property ?string $category
 * @property ?array $classifications
 * @property ?string $commitSha
 * @property string $environment
 * @property ?Location $location
 * @property ?Message $message
 * @property string $ref
 * @property string $state
 */
interface MostRecentInstance
{
}
