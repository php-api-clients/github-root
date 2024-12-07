<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Event;

use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Client\GitHub\Schema\IssueComment;

/**
 * @property ?string $action
 * @property ?Issue $issue
 * @property ?IssueComment $comment
 * @property ?array $pages
 */
interface Payload
{
}
