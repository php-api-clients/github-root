<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\ContentSymlink\Links;

/**
 * @property string $type
 * @property string $target
 * @property int $size
 * @property string $name
 * @property string $path
 * @property string $sha
 * @property string $url
 * @property ?string $gitUrl
 * @property ?string $htmlUrl
 * @property ?string $downloadUrl
 * @property Links $links
 */
interface ContentSymlink
{
}
