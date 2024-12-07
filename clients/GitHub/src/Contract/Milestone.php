<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $url
 * @property string $htmlUrl
 * @property string $labelsUrl
 * @property int $id
 * @property string $nodeId
 * @property int $number
 * @property string $state
 * @property string $title
 * @property ?string $description
 * @property ?SimpleUser $creator
 * @property int $openIssues
 * @property int $closedIssues
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $closedAt
 * @property ?string $dueOn
 */
interface Milestone
{
}
