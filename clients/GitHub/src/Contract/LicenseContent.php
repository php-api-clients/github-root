<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\LicenseContent\Links;
use ApiClients\Client\GitHub\Schema\LicenseSimple;

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
 * @property Links $links
 * @property ?LicenseSimple $license
 */
interface LicenseContent
{
}
