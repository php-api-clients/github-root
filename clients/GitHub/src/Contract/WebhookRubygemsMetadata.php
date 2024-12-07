<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $name
 * @property ?string $description
 * @property ?string $readme
 * @property ?string $homepage
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRubygemsMetadata\VersionInfo $versionInfo
 * @property ?string $platform
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRubygemsMetadata\Metadata $metadata
 * @property ?string $repo
 * @property ?array $dependencies
 * @property ?string $commitOid
 */
interface WebhookRubygemsMetadata
{
}
