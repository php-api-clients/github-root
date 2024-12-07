<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Issues\Create\Request;

/**
 * @property string|int $title
 * @property ?string $body
 * @property ?string $assignee
 * @property null|string|int $milestone
 * @property ?array<\ApiClients\Client\GitHub\Schema\Issues\Create\Request\ApplicationJson\Labels\One> $labels
 * @property ?array $assignees
 */
interface ApplicationJson
{
}
