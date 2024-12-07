<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $name
 * @property string $packageType
 * @property string $url
 * @property string $htmlUrl
 * @property int $versionCount
 * @property string $visibility
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $owner
 * @property ?\ApiClients\Client\GitHub\Schema\MinimalRepository $repository
 * @property string $createdAt
 * @property string $updatedAt
 */
interface Package
{
}
