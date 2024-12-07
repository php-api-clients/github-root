<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CodeScanningAnalysisTool;

/**
 * @property string $ref
 * @property string $commitSha
 * @property string $analysisKey
 * @property string $environment
 * @property ?string $category
 * @property string $error
 * @property string $createdAt
 * @property int $resultsCount
 * @property int $rulesCount
 * @property int $id
 * @property string $url
 * @property string $sarifId
 * @property CodeScanningAnalysisTool $tool
 * @property bool $deletable
 * @property string $warning
 */
interface CodeScanningAnalysis
{
}
