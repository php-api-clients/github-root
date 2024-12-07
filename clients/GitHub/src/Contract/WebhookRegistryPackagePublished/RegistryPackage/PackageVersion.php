<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookRegistryPackagePublished\RegistryPackage;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Author $author
 * @property null|string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Body\One $body
 * @property ?string $bodyHtml
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata $containerMetadata
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
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata $npmMetadata
 * @property ?array $nugetMetadata
 * @property array $packageFiles
 * @property string $packageUrl
 * @property ?bool $prerelease
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Release $release
 * @property ?array $rubygemsMetadata
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
