<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\ReactionRollup;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $htmlUrl
 * @property string $url
 * @property int $id
 * @property string $nodeId
 * @property string $body
 * @property ?string $path
 * @property ?int $position
 * @property ?int $line
 * @property string $commitId
 * @property ?SimpleUser $user
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $authorAssociation
 * @property ?ReactionRollup $reactions
 */
interface CommitComment
{
}
