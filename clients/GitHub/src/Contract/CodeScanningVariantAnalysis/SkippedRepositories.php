<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\CodeScanningVariantAnalysis;

/**
 * @property \ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisSkippedRepoGroup $accessMismatchRepos
 * @property \ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis\SkippedRepositories\NotFoundRepos $notFoundRepos
 * @property \ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisSkippedRepoGroup $noCodeqlDbRepos
 * @property \ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisSkippedRepoGroup $overLimitRepos
 */
interface SkippedRepositories
{
}
