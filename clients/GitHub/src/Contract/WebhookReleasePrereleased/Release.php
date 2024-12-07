<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookReleasePrereleased;

/**
 * @property array $assets
 * @property string $assetsUrl
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookReleasePrereleased\Release\Author $author
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
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookReleasePrereleased\Release\Reactions $reactions
 * @property string $tagName
 * @property ?string $tarballUrl
 * @property string $targetCommitish
 * @property string $uploadUrl
 * @property string $url
 * @property ?string $zipballUrl
 */
interface Release
{
}
