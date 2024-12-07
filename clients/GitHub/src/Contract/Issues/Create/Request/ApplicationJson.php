<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Issues\Create\Request;

use ApiClients\Client\GitHub\Schema\Issues\Create\Request\ApplicationJson\Labels\One;

/**
 * @property string|int $title
 * @property ?string $body
 * @property ?string $assignee
 * @property string|int|null $milestone
 * @property ?array<One> $labels
 * @property ?array $assignees
 */
interface ApplicationJson
{
}
