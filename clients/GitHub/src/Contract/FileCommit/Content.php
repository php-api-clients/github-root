<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\FileCommit;

use ApiClients\Client\GitHub\Schema\FileCommit\Content\Links;

/**
 * @property ?string $name
 * @property ?string $path
 * @property ?string $sha
 * @property ?int $size
 * @property ?string $url
 * @property ?string $htmlUrl
 * @property ?string $gitUrl
 * @property ?string $downloadUrl
 * @property ?string $type
 * @property ?Links $links
 */
interface Content
{
}
