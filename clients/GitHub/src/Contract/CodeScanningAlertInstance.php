<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance\Message;
use ApiClients\Client\GitHub\Schema\CodeScanningAlertLocation;

/**
 * @property ?string $ref
 * @property ?string $analysisKey
 * @property ?string $environment
 * @property ?string $category
 * @property ?string $state
 * @property ?string $commitSha
 * @property ?Message $message
 * @property ?CodeScanningAlertLocation $location
 * @property ?string $htmlUrl
 * @property ?array $classifications
 */
interface CodeScanningAlertInstance
{
}
