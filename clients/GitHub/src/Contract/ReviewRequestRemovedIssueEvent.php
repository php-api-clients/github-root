<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\Team;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $url
 * @property SimpleUser $actor
 * @property string $event
 * @property ?string $commitId
 * @property ?string $commitUrl
 * @property string $createdAt
 * @property ?Integration $performedViaGithubApp
 * @property SimpleUser $reviewRequester
 * @property ?Team $requestedTeam
 * @property ?SimpleUser $requestedReviewer
 */
interface ReviewRequestRemovedIssueEvent
{
}
