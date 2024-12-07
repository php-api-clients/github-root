<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property ?int $pullRequestReviewId
 * @property int $id
 * @property string $nodeId
 * @property string $diffHunk
 * @property string $path
 * @property ?int $position
 * @property ?int $originalPosition
 * @property string $commitId
 * @property string $originalCommitId
 * @property ?int $inReplyToId
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $user
 * @property string $body
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $htmlUrl
 * @property string $pullRequestUrl
 * @property string $authorAssociation
 * @property \ApiClients\Client\GitHub\Schema\PullRequestReviewComment\Links $links
 * @property ?int $startLine
 * @property ?int $originalStartLine
 * @property ?string $startSide
 * @property ?int $line
 * @property ?int $originalLine
 * @property ?string $side
 * @property ?string $subjectType
 * @property ?\ApiClients\Client\GitHub\Schema\ReactionRollup $reactions
 * @property ?string $bodyHtml
 * @property ?string $bodyText
 */
interface PullRequestReviewComment
{
}
