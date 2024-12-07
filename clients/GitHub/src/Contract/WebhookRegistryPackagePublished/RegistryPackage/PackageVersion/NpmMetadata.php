<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Author\One;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Bin;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Dependencies;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\DevDependencies;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Engines;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Man;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\OptionalDependencies;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\PeerDependencies;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Scripts;

/**
 * @property ?string $name
 * @property ?string $version
 * @property ?string $npmUser
 * @property string|One|null $author
 * @property string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Bugs\One|null $bugs
 * @property ?Dependencies $dependencies
 * @property ?DevDependencies $devDependencies
 * @property ?PeerDependencies $peerDependencies
 * @property ?OptionalDependencies $optionalDependencies
 * @property ?string $description
 * @property string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Dist\One|null $dist
 * @property ?string $gitHead
 * @property ?string $homepage
 * @property ?string $license
 * @property ?string $main
 * @property string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Repository\One|null $repository
 * @property ?Scripts $scripts
 * @property ?string $id
 * @property ?string $nodeVersion
 * @property ?string $npmVersion
 * @property ?bool $hasShrinkwrap
 * @property ?array $maintainers
 * @property ?array $contributors
 * @property ?Engines $engines
 * @property ?array $keywords
 * @property ?array $files
 * @property ?Bin $bin
 * @property ?Man $man
 * @property string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Directories\One|null $directories
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
