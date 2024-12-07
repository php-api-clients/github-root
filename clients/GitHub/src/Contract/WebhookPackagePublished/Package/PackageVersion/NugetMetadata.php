<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata\Value\Three;

/**
 * @property int|string|null $id
 * @property ?string $name
 * @property bool|string|int|Three|null $value
 */
interface NugetMetadata
{
}
