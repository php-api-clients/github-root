<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookCommitCommentCreated;

/**
 * @property string $authorAssociation
 * @property string $body
 * @property string $commitId
 * @property string $createdAt
 * @property string $htmlUrl
 * @property int $id
 * @property ?int $line
 * @property string $nodeId
 * @property ?string $path
 * @property ?int $position
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCommitCommentCreated\Comment\Reactions $reactions
 * @property string $updatedAt
 * @property string $url
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookCommitCommentCreated\Comment\User $user
 */
interface Comment
{
}
