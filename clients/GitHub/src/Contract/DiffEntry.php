<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $sha
 * @property string $filename
 * @property string $status
 * @property int $additions
 * @property int $deletions
 * @property int $changes
 * @property string $blobUrl
 * @property string $rawUrl
 * @property string $contentsUrl
 * @property ?string $patch
 * @property ?string $previousFilename
 */
interface DiffEntry
{
}
