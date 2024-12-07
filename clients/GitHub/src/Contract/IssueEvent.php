<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $url
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $actor
 * @property string $event
 * @property ?string $commitId
 * @property ?string $commitUrl
 * @property string $createdAt
 * @property ?\ApiClients\Client\GitHub\Schema\Issue $issue
 * @property ?\ApiClients\Client\GitHub\Schema\IssueEventLabel $label
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $assignee
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $assigner
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $reviewRequester
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $requestedReviewer
 * @property ?\ApiClients\Client\GitHub\Schema\Team $requestedTeam
 * @property ?\ApiClients\Client\GitHub\Schema\IssueEventDismissedReview $dismissedReview
 * @property ?\ApiClients\Client\GitHub\Schema\IssueEventMilestone $milestone
 * @property ?\ApiClients\Client\GitHub\Schema\IssueEventProjectCard $projectCard
 * @property ?\ApiClients\Client\GitHub\Schema\IssueEventRename $rename
 * @property ?string $authorAssociation
 * @property ?string $lockReason
 * @property ?\ApiClients\Client\GitHub\Schema\Integration $performedViaGithubApp
 */
interface IssueEvent
{
}
