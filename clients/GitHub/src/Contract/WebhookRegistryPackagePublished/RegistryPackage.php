<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookRegistryPackagePublished;

/**
 * @property ?string $createdAt
 * @property ?string $description
 * @property string $ecosystem
 * @property string $htmlUrl
 * @property int $id
 * @property string $name
 * @property string $namespace
 * @property \ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\Owner $owner
 * @property string $packageType
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion $packageVersion
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\Registry $registry
 * @property ?string $updatedAt
 */
interface RegistryPackage
{
}
