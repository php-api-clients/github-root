<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property \ApiClients\Client\GitHub\Schema\SimpleRepository $repository
 * @property string $analysisStatus
 * @property ?int $artifactSizeInBytes
 * @property ?int $resultCount
 * @property ?string $failureMessage
 * @property ?string $databaseCommitSha
 * @property ?string $sourceLocationPrefix
 * @property ?string $artifactUrl
 */
interface CodeScanningVariantAnalysisRepoTask
{
}
