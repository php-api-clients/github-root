<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\ReactionRollup;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property ?SimpleUser $author
 * @property string $body
 * @property string $bodyHtml
 * @property string $bodyVersion
 * @property int $commentsCount
 * @property string $commentsUrl
 * @property string $createdAt
 * @property ?string $lastEditedAt
 * @property string $htmlUrl
 * @property string $nodeId
 * @property int $number
 * @property bool $pinned
 * @property bool $private
 * @property string $teamUrl
 * @property string $title
 * @property string $updatedAt
 * @property string $url
 * @property ?ReactionRollup $reactions
 */
interface TeamDiscussion
{
}
