<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Issues\Update\Request;

use ApiClients\Client\GitHub\Schema\Issues\Update\Request\ApplicationJson\Labels\One;

/**
 * @property string|int|null $title
 * @property ?string $body
 * @property ?string $assignee
 * @property ?string $state
 * @property ?string $stateReason
 * @property string|int|null $milestone
 * @property ?array<One> $labels
 * @property ?array $assignees
 */
interface ApplicationJson
{
}
