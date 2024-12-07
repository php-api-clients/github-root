<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\MinimalRepository;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $name
 * @property string $packageType
 * @property string $url
 * @property string $htmlUrl
 * @property int $versionCount
 * @property string $visibility
 * @property ?SimpleUser $owner
 * @property ?MinimalRepository $repository
 * @property string $createdAt
 * @property string $updatedAt
 */
interface Package
{
}
