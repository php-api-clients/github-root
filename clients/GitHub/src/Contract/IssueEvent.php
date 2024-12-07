<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Client\GitHub\Schema\IssueEventDismissedReview;
use ApiClients\Client\GitHub\Schema\IssueEventLabel;
use ApiClients\Client\GitHub\Schema\IssueEventMilestone;
use ApiClients\Client\GitHub\Schema\IssueEventProjectCard;
use ApiClients\Client\GitHub\Schema\IssueEventRename;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\Team;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $url
 * @property ?SimpleUser $actor
 * @property string $event
 * @property ?string $commitId
 * @property ?string $commitUrl
 * @property string $createdAt
 * @property ?Issue $issue
 * @property ?IssueEventLabel $label
 * @property ?SimpleUser $assignee
 * @property ?SimpleUser $assigner
 * @property ?SimpleUser $reviewRequester
 * @property ?SimpleUser $requestedReviewer
 * @property ?Team $requestedTeam
 * @property ?IssueEventDismissedReview $dismissedReview
 * @property ?IssueEventMilestone $milestone
 * @property ?IssueEventProjectCard $projectCard
 * @property ?IssueEventRename $rename
 * @property ?string $authorAssociation
 * @property ?string $lockReason
 * @property ?Integration $performedViaGithubApp
 */
interface IssueEvent
{
}
