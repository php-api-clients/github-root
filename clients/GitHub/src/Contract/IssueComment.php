<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\ReactionRollup;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $url
 * @property ?string $body
 * @property ?string $bodyText
 * @property ?string $bodyHtml
 * @property string $htmlUrl
 * @property ?SimpleUser $user
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $issueUrl
 * @property string $authorAssociation
 * @property ?Integration $performedViaGithubApp
 * @property ?ReactionRollup $reactions
 */
interface IssueComment
{
}
