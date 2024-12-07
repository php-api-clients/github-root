<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Issues\Update\Request;

/**
 * @property null|string|int $title
 * @property ?string $body
 * @property ?string $assignee
 * @property ?string $state
 * @property ?string $stateReason
 * @property null|string|int $milestone
 * @property ?array<\ApiClients\Client\GitHub\Schema\Issues\Update\Request\ApplicationJson\Labels\One> $labels
 * @property ?array $assignees
 */
interface ApplicationJson
{
}
