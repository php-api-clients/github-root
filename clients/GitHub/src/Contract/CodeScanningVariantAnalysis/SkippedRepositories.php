<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\CodeScanningVariantAnalysis;

use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis\SkippedRepositories\NotFoundRepos;
use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisSkippedRepoGroup;

/**
 * @property CodeScanningVariantAnalysisSkippedRepoGroup $accessMismatchRepos
 * @property NotFoundRepos $notFoundRepos
 * @property CodeScanningVariantAnalysisSkippedRepoGroup $noCodeqlDbRepos
 * @property CodeScanningVariantAnalysisSkippedRepoGroup $overLimitRepos
 */
interface SkippedRepositories
{
}
