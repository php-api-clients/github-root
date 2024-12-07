<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $nodeId
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $user
 * @property string $body
 * @property string $state
 * @property string $htmlUrl
 * @property string $pullRequestUrl
 * @property \ApiClients\Client\GitHub\Schema\PullRequestReview\Links $links
 * @property ?string $submittedAt
 * @property ?string $commitId
 * @property ?string $bodyHtml
 * @property ?string $bodyText
 * @property string $authorAssociation
 */
interface PullRequestReview
{
}
