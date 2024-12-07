<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links;

/**
 * @property string $event
 * @property int $id
 * @property string $nodeId
 * @property SimpleUser $user
 * @property ?string $body
 * @property string $state
 * @property string $htmlUrl
 * @property string $pullRequestUrl
 * @property Links $links
 * @property ?string $submittedAt
 * @property string $commitId
 * @property ?string $bodyHtml
 * @property ?string $bodyText
 * @property string $authorAssociation
 */
interface TimelineReviewedEvent
{
}
