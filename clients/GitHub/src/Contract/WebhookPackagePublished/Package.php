<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookPackagePublished;

/**
 * @property ?string $createdAt
 * @property ?string $description
 * @property string $ecosystem
 * @property string $htmlUrl
 * @property int $id
 * @property string $name
 * @property string $namespace
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\Owner $owner
 * @property string $packageType
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion $packageVersion
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\Registry $registry
 * @property ?string $updatedAt
 */
interface Package
{
}
