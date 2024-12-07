<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookPackagePublished\Package\PackageVersion;

/**
 * @property ?string $name
 * @property ?string $version
 * @property ?string $npmUser
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Author $author
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Bugs $bugs
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies $dependencies
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\DevDependencies $devDependencies
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\PeerDependencies $peerDependencies
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\OptionalDependencies $optionalDependencies
 * @property ?string $description
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dist $dist
 * @property ?string $gitHead
 * @property ?string $homepage
 * @property ?string $license
 * @property ?string $main
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Repository $repository
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Scripts $scripts
 * @property ?string $id
 * @property ?string $nodeVersion
 * @property ?string $npmVersion
 * @property ?bool $hasShrinkwrap
 * @property ?array $maintainers
 * @property ?array $contributors
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Engines $engines
 * @property ?array $keywords
 * @property ?array $files
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Bin $bin
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Man $man
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Directories $directories
 * @property ?array $os
 * @property ?array $cpu
 * @property ?string $readme
 * @property ?string $installationCommand
 * @property ?int $releaseId
 * @property ?string $commitOid
 * @property ?bool $publishedViaActions
 * @property ?int $deletedById
 */
interface NpmMetadata
{
}
