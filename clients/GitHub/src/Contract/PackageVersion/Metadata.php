<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\PackageVersion;

use ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container;
use ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker;

/**
 * @property string $packageType
 * @property ?Container $container
 * @property ?Docker $docker
 */
interface Metadata
{
}
