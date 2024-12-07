<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCommitCommentCreated;

use ApiClients\Client\GitHub\Schema\WebhookCommitCommentCreated\Comment\Reactions;
use ApiClients\Client\GitHub\Schema\WebhookCommitCommentCreated\Comment\User;

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
 * @property ?Reactions $reactions
 * @property string $updatedAt
 * @property string $url
 * @property ?User $user
 */
interface Comment
{
}
