<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\ContentSubmodule\Links;

/**
 * @property string $type
 * @property string $submoduleGitUrl
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
interface ContentSubmodule
{
}
