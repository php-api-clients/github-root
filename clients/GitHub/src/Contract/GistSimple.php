<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?array $forks
 * @property ?array $history
 * @property ?\ApiClients\Client\GitHub\Schema\GistSimple\ForkOf $forkOf
 * @property ?string $url
 * @property ?string $forksUrl
 * @property ?string $commitsUrl
 * @property ?string $id
 * @property ?string $nodeId
 * @property ?string $gitPullUrl
 * @property ?string $gitPushUrl
 * @property ?string $htmlUrl
 * @property ?\ApiClients\Client\GitHub\Schema\GistSimple\Files $files
 * @property ?bool $public
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property ?string $description
 * @property ?int $comments
 * @property ?string $user
 * @property ?string $commentsUrl
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $owner
 * @property ?bool $truncated
 */
interface GistSimple
{
}
