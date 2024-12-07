<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Event;

/**
 * @property ?string $action
 * @property ?\ApiClients\Client\GitHub\Schema\Issue $issue
 * @property ?\ApiClients\Client\GitHub\Schema\IssueComment $comment
 * @property ?array $pages
 */
interface Payload
{
}
