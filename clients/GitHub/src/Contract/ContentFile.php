<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\ContentFile\Links;

/**
 * @property string $type
 * @property string $encoding
 * @property int $size
 * @property string $name
 * @property string $path
 * @property string $content
 * @property string $sha
 * @property string $url
 * @property ?string $gitUrl
 * @property ?string $htmlUrl
 * @property ?string $downloadUrl
 * @property Links $links
 * @property ?string $target
 * @property ?string $submoduleGitUrl
 */
interface ContentFile
{
}
