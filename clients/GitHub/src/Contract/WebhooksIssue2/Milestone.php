<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhooksIssue2;

use ApiClients\Client\GitHub\Schema\WebhooksIssue2\Milestone\Creator;

/**
 * @property ?string $closedAt
 * @property int $closedIssues
 * @property string $createdAt
 * @property ?Creator $creator
 * @property ?string $description
 * @property ?string $dueOn
 * @property string $htmlUrl
 * @property int $id
 * @property string $labelsUrl
 * @property string $nodeId
 * @property int $number
 * @property int $openIssues
 * @property string $state
 * @property string $title
 * @property string $updatedAt
 * @property string $url
 */
interface Milestone
{
}
