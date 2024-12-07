<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property string $forksUrl
 * @property string $commitsUrl
 * @property string $id
 * @property string $nodeId
 * @property string $gitPullUrl
 * @property string $gitPushUrl
 * @property string $htmlUrl
 * @property \ApiClients\Client\GitHub\Schema\BaseGist\Files $files
 * @property bool $public
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $description
 * @property int $comments
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $user
 * @property string $commentsUrl
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $owner
 * @property ?bool $truncated
 * @property ?array $forks
 * @property ?array $history
 */
interface BaseGist
{
}
