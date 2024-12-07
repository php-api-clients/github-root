<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\PackageVersion\Metadata;

/**
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $packageHtmlUrl
 * @property ?string $htmlUrl
 * @property ?string $license
 * @property ?string $description
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $deletedAt
 * @property ?Metadata $metadata
 */
interface PackageVersion
{
}
