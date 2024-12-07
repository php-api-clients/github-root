<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhooksRelease1;

use ApiClients\Client\GitHub\Schema\WebhooksRelease1\Assets\Uploader;

/**
 * @property string $browserDownloadUrl
 * @property string $contentType
 * @property string $createdAt
 * @property int $downloadCount
 * @property int $id
 * @property ?string $label
 * @property string $name
 * @property string $nodeId
 * @property int $size
 * @property string $state
 * @property string $updatedAt
 * @property ?Uploader $uploader
 * @property string $url
 */
interface Assets
{
}
