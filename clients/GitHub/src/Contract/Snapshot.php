<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $version
 * @property \ApiClients\Client\GitHub\Schema\Snapshot\Job $job
 * @property string $sha
 * @property string $ref
 * @property \ApiClients\Client\GitHub\Schema\Snapshot\Detector $detector
 * @property ?\ApiClients\Client\GitHub\Schema\Metadata $metadata
 * @property ?\ApiClients\Client\GitHub\Schema\Snapshot\Manifests $manifests
 * @property string $scanned
 */
interface Snapshot
{
}
