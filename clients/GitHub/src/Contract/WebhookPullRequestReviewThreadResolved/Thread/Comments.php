<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestReviewThreadResolved\Thread;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewThreadResolved\Thread\Comments\Links;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewThreadResolved\Thread\Comments\Reactions;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewThreadResolved\Thread\Comments\User;

/**
 * @property Links $links
 * @property string $authorAssociation
 * @property string $body
 * @property string $commitId
 * @property string $createdAt
 * @property string $diffHunk
 * @property string $htmlUrl
 * @property int $id
 * @property ?int $inReplyToId
 * @property ?int $line
 * @property string $nodeId
 * @property string $originalCommitId
 * @property ?int $originalLine
 * @property int $originalPosition
 * @property ?int $originalStartLine
 * @property string $path
 * @property ?int $position
 * @property ?int $pullRequestReviewId
 * @property string $pullRequestUrl
 * @property Reactions $reactions
 * @property string $side
 * @property ?int $startLine
 * @property ?string $startSide
 * @property ?string $subjectType
 * @property string $updatedAt
 * @property string $url
 * @property ?User $user
 */
interface Comments
{
}
