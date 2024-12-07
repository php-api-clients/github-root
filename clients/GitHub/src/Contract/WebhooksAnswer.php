<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\WebhooksAnswer\Reactions;
use ApiClients\Client\GitHub\Schema\WebhooksAnswer\User;

/**
 * @property string $authorAssociation
 * @property string $body
 * @property int $childCommentCount
 * @property string $createdAt
 * @property int $discussionId
 * @property string $htmlUrl
 * @property int $id
 * @property string $nodeId
 * @property string $parentId
 * @property ?Reactions $reactions
 * @property string $repositoryUrl
 * @property string $updatedAt
 * @property ?User $user
 */
interface WebhooksAnswer
{
}
