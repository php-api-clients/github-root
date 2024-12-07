<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\ConvertedNoteToIssueIssueEvent\ProjectCard;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\SimpleUser;

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
 * @property ?ProjectCard $projectCard
 */
interface ConvertedNoteToIssueIssueEvent
{
}
