<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\FileCommit;

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
 * @property ?\ApiClients\Client\GitHub\Schema\FileCommit\Content\Links $links
 */
interface Content
{
}
