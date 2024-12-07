<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Author;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Bin;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Bugs;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\DevDependencies;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Directories;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dist;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Engines;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Man;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\OptionalDependencies;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\PeerDependencies;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Repository;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Scripts;

/**
 * @property ?string $name
 * @property ?string $version
 * @property ?string $npmUser
 * @property ?Author $author
 * @property ?Bugs $bugs
 * @property ?Dependencies $dependencies
 * @property ?DevDependencies $devDependencies
 * @property ?PeerDependencies $peerDependencies
 * @property ?OptionalDependencies $optionalDependencies
 * @property ?string $description
 * @property ?Dist $dist
 * @property ?string $gitHead
 * @property ?string $homepage
 * @property ?string $license
 * @property ?string $main
 * @property ?Repository $repository
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
 * @property ?Directories $directories
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
