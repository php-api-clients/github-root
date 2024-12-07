<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Commit;

/**
 * @property string $url
 * @property string $htmlUrl
 * @property string $permalinkUrl
 * @property string $diffUrl
 * @property string $patchUrl
 * @property Commit $baseCommit
 * @property Commit $mergeBaseCommit
 * @property string $status
 * @property int $aheadBy
 * @property int $behindBy
 * @property int $totalCommits
 * @property array $commits
 * @property ?array $files
 */
interface CommitComparison
{
}
