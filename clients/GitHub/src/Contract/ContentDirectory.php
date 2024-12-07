<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $type
 * @property int $size
 * @property string $name
 * @property string $path
 * @property ?string $content
 * @property string $sha
 * @property string $url
 * @property ?string $gitUrl
 * @property ?string $htmlUrl
 * @property ?string $downloadUrl
 * @property \ApiClients\Client\GitHub\Schema\ContentDirectory\Links $links
 */
interface ContentDirectory
{
}
