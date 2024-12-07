<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\Release\Author;

/**
 * @property Author $author
 * @property string $createdAt
 * @property bool $draft
 * @property string $htmlUrl
 * @property int $id
 * @property string $name
 * @property bool $prerelease
 * @property string $publishedAt
 * @property string $tagName
 * @property string $targetCommitish
 * @property string $url
 */
interface Release
{
}
