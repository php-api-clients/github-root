<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPackagePublished\Package;

use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Author;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Body\One;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Release;

/**
 * @property ?Author $author
 * @property string|One|null $body
 * @property ?string $bodyHtml
 * @property ?ContainerMetadata $containerMetadata
 * @property ?string $createdAt
 * @property string $description
 * @property ?array $dockerMetadata
 * @property ?bool $draft
 * @property string $htmlUrl
 * @property int $id
 * @property string $installationCommand
 * @property ?string $manifest
 * @property array $metadata
 * @property string $name
 * @property ?NpmMetadata $npmMetadata
 * @property ?array $nugetMetadata
 * @property array $packageFiles
 * @property ?string $packageUrl
 * @property ?bool $prerelease
 * @property ?Release $release
 * @property ?array $rubygemsMetadata
 * @property ?string $sourceUrl
 * @property string $summary
 * @property ?string $tagName
 * @property ?string $targetCommitish
 * @property ?string $targetOid
 * @property ?string $updatedAt
 * @property string $version
 */
interface PackageVersion
{
}
