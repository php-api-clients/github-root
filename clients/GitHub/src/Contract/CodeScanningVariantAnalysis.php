<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property \ApiClients\Client\GitHub\Schema\SimpleRepository $controllerRepo
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $actor
 * @property string $queryLanguage
 * @property string $queryPackUrl
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property ?string $completedAt
 * @property string $status
 * @property ?int $actionsWorkflowRunId
 * @property ?string $failureReason
 * @property ?array $scannedRepositories
 * @property ?\ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis\SkippedRepositories $skippedRepositories
 */
interface CodeScanningVariantAnalysis
{
}
