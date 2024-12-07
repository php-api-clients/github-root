<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis\SkippedRepositories;
use ApiClients\Client\GitHub\Schema\SimpleRepository;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property SimpleRepository $controllerRepo
 * @property SimpleUser $actor
 * @property string $queryLanguage
 * @property string $queryPackUrl
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property ?string $completedAt
 * @property string $status
 * @property ?int $actionsWorkflowRunId
 * @property ?string $failureReason
 * @property ?array $scannedRepositories
 * @property ?SkippedRepositories $skippedRepositories
 */
interface CodeScanningVariantAnalysis
{
}
