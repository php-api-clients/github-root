<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\WebhookRubygemsMetadata\Metadata;
use ApiClients\Client\GitHub\Schema\WebhookRubygemsMetadata\VersionInfo;

/**
 * @property ?string $name
 * @property ?string $description
 * @property ?string $readme
 * @property ?string $homepage
 * @property ?VersionInfo $versionInfo
 * @property ?string $platform
 * @property ?Metadata $metadata
 * @property ?string $repo
 * @property ?array $dependencies
 * @property ?string $commitOid
 */
interface WebhookRubygemsMetadata
{
}
