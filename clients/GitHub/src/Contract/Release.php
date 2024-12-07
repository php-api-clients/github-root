<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property string $htmlUrl
 * @property string $assetsUrl
 * @property string $uploadUrl
 * @property ?string $tarballUrl
 * @property ?string $zipballUrl
 * @property int $id
 * @property string $nodeId
 * @property string $tagName
 * @property string $targetCommitish
 * @property ?string $name
 * @property ?string $body
 * @property bool $draft
 * @property bool $prerelease
 * @property string $createdAt
 * @property ?string $publishedAt
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $author
 * @property array $assets
 * @property ?string $bodyHtml
 * @property ?string $bodyText
 * @property ?int $mentionsCount
 * @property ?string $discussionUrl
 * @property ?\ApiClients\Client\GitHub\Schema\ReactionRollup $reactions
 */
interface Release
{
}
