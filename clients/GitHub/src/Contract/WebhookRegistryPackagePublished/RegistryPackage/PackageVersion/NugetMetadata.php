<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NugetMetadata\Id\One;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NugetMetadata\Value\Three;

/**
 * @property string|One|int|null $id
 * @property ?string $name
 * @property bool|string|int|Three|null $value
 */
interface NugetMetadata
{
}
