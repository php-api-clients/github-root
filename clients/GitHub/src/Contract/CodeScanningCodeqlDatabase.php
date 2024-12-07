<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $name
 * @property string $language
 * @property SimpleUser $uploader
 * @property string $contentType
 * @property int $size
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $url
 * @property ?string $commitOid
 */
interface CodeScanningCodeqlDatabase
{
}
