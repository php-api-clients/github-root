<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata\Labels;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata\Manifest;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata\Tag;

/**
 * @property ?Labels $labels
 * @property ?Manifest $manifest
 * @property ?Tag $tag
 */
interface ContainerMetadata
{
}
