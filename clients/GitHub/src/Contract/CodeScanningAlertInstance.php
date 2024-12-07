<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $ref
 * @property ?string $analysisKey
 * @property ?string $environment
 * @property ?string $category
 * @property ?string $state
 * @property ?string $commitSha
 * @property ?\ApiClients\Client\GitHub\Schema\CodeScanningAlertInstance\Message $message
 * @property ?\ApiClients\Client\GitHub\Schema\CodeScanningAlertLocation $location
 * @property ?string $htmlUrl
 * @property ?array $classifications
 */
interface CodeScanningAlertInstance
{
}
