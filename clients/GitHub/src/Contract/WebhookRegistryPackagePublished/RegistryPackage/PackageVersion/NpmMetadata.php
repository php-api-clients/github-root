<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

/**
 * @property ?string $name
 * @property ?string $version
 * @property ?string $npmUser
 * @property null|string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Author\One $author
 * @property null|string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Bugs\One $bugs
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Dependencies $dependencies
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\DevDependencies $devDependencies
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\PeerDependencies $peerDependencies
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\OptionalDependencies $optionalDependencies
 * @property ?string $description
 * @property null|string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Dist\One $dist
 * @property ?string $gitHead
 * @property ?string $homepage
 * @property ?string $license
 * @property ?string $main
 * @property null|string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Repository\One $repository
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Scripts $scripts
 * @property ?string $id
 * @property ?string $nodeVersion
 * @property ?string $npmVersion
 * @property ?bool $hasShrinkwrap
 * @property ?array $maintainers
 * @property ?array $contributors
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Engines $engines
 * @property ?array $keywords
 * @property ?array $files
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Bin $bin
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Man $man
 * @property null|string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Directories\One $directories
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
