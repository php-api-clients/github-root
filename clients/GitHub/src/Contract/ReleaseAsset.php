<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property string $browserDownloadUrl
 * @property int $id
 * @property string $nodeId
 * @property string $name
 * @property ?string $label
 * @property string $state
 * @property string $contentType
 * @property int $size
 * @property int $downloadCount
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $uploader
 */
interface ReleaseAsset
{
}
