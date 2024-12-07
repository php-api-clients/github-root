<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\WebhooksIssueComment\Reactions;
use ApiClients\Client\GitHub\Schema\WebhooksIssueComment\User;

/**
 * @property string $authorAssociation
 * @property string $body
 * @property string $createdAt
 * @property string $htmlUrl
 * @property int $id
 * @property string $issueUrl
 * @property string $nodeId
 * @property ?Integration $performedViaGithubApp
 * @property Reactions $reactions
 * @property string $updatedAt
 * @property string $url
 * @property ?User $user
 */
interface WebhooksIssueComment
{
}
