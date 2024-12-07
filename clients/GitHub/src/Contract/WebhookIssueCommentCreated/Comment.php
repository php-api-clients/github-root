<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookIssueCommentCreated;

/**
 * @property string $authorAssociation
 * @property string $body
 * @property string $createdAt
 * @property string $htmlUrl
 * @property int $id
 * @property string $issueUrl
 * @property string $nodeId
 * @property ?\ApiClients\Client\GitHub\Schema\Integration $performedViaGithubApp
 * @property \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Comment\Reactions $reactions
 * @property string $updatedAt
 * @property string $url
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Comment\User $user
 */
interface Comment
{
}
