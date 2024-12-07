<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Metadata;
use ApiClients\Client\GitHub\Schema\Snapshot\Detector;
use ApiClients\Client\GitHub\Schema\Snapshot\Job;
use ApiClients\Client\GitHub\Schema\Snapshot\Manifests;

/**
 * @property int $version
 * @property Job $job
 * @property string $sha
 * @property string $ref
 * @property Detector $detector
 * @property ?Metadata $metadata
 * @property ?Manifests $manifests
 * @property string $scanned
 */
interface Snapshot
{
}
