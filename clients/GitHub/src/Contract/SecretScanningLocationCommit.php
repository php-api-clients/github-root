<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $path
 * @property int|float $startLine
 * @property int|float $endLine
 * @property int|float $startColumn
 * @property int|float $endColumn
 * @property string $blobSha
 * @property string $blobUrl
 * @property string $commitSha
 * @property string $commitUrl
 */
interface SecretScanningLocationCommit
{
}
