<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookRegistryPackageUpdated\RegistryPackage;

use ApiClients\Client\GitHub\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\Author;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\Release;

/**
 * @property Author $author
 * @property string $body
 * @property string $bodyHtml
 * @property string $createdAt
 * @property string $description
 * @property ?array $dockerMetadata
 * @property ?bool $draft
 * @property string $htmlUrl
 * @property int $id
 * @property string $installationCommand
 * @property ?string $manifest
 * @property array $metadata
 * @property string $name
 * @property array $packageFiles
 * @property string $packageUrl
 * @property ?bool $prerelease
 * @property ?Release $release
 * @property ?array $rubygemsMetadata
 * @property string $summary
 * @property ?string $tagName
 * @property string $targetCommitish
 * @property string $targetOid
 * @property string $updatedAt
 * @property string $version
 */
interface PackageVersion
{
}
