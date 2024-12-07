<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $name
 * @property string $path
 * @property string $sha
 * @property int $size
 * @property string $url
 * @property ?string $htmlUrl
 * @property ?string $gitUrl
 * @property ?string $downloadUrl
 * @property string $type
 * @property string $content
 * @property string $encoding
 * @property \ApiClients\Client\GitHub\Schema\LicenseContent\Links $links
 * @property ?\ApiClients\Client\GitHub\Schema\LicenseSimple $license
 */
interface LicenseContent
{
}
