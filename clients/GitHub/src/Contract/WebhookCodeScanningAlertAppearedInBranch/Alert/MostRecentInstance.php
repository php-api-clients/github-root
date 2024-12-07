<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertAppearedInBranch\Alert;

/**
 * @property string $analysisKey
 * @property ?string $category
 * @property ?array $classifications
 * @property ?string $commitSha
 * @property string $environment
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location $location
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Message $message
 * @property string $ref
 * @property string $state
 */
interface MostRecentInstance
{
}
