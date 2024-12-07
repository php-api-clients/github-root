<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\CodeScanningVariantAnalysis;

use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisRepository;

/**
 * @property CodeScanningVariantAnalysisRepository $repository
 * @property string $analysisStatus
 * @property ?int $resultCount
 * @property ?int $artifactSizeInBytes
 * @property ?string $failureMessage
 */
interface ScannedRepositories
{
}
