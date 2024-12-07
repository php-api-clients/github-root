<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPackageUpdated;

use ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\Owner;
use ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion;
use ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\Registry;

/**
 * @property string $createdAt
 * @property ?string $description
 * @property string $ecosystem
 * @property string $htmlUrl
 * @property int $id
 * @property string $name
 * @property string $namespace
 * @property ?Owner $owner
 * @property string $packageType
 * @property PackageVersion $packageVersion
 * @property ?Registry $registry
 * @property string $updatedAt
 */
interface Package
{
}
