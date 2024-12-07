<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\PackageVersion;

/**
 * @property string $packageType
 * @property ?\ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container $container
 * @property ?\ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker $docker
 */
interface Metadata
{
}
