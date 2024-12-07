<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\WebhooksRelease1\Author;
use ApiClients\Client\GitHub\Schema\WebhooksRelease1\Reactions;

/**
 * @property array $assets
 * @property string $assetsUrl
 * @property ?Author $author
 * @property ?string $body
 * @property ?string $createdAt
 * @property ?string $discussionUrl
 * @property bool $draft
 * @property string $htmlUrl
 * @property int $id
 * @property ?string $name
 * @property string $nodeId
 * @property bool $prerelease
 * @property ?string $publishedAt
 * @property ?Reactions $reactions
 * @property string $tagName
 * @property ?string $tarballUrl
 * @property string $targetCommitish
 * @property string $uploadUrl
 * @property string $url
 * @property ?string $zipballUrl
 */
interface WebhooksRelease1
{
}
