<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Manifest\File;
use ApiClients\Client\GitHub\Schema\Manifest\Resolved;
use ApiClients\Client\GitHub\Schema\Metadata;

/**
 * @property string $name
 * @property ?File $file
 * @property ?Metadata $metadata
 * @property ?Resolved $resolved
 */
interface Manifest
{
}
