<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\ContentTree\Links;

/**
 * @property string $type
 * @property int $size
 * @property string $name
 * @property string $path
 * @property string $sha
 * @property ?string $content
 * @property string $url
 * @property ?string $gitUrl
 * @property ?string $htmlUrl
 * @property ?string $downloadUrl
 * @property ?array $entries
 * @property Links $links
 */
interface ContentTree
{
}
