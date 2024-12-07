<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $event
 * @property string $sha
 * @property string $nodeId
 * @property string $url
 * @property \ApiClients\Client\GitHub\Schema\TimelineCommittedEvent\Author $author
 * @property \ApiClients\Client\GitHub\Schema\TimelineCommittedEvent\Committer $committer
 * @property string $message
 * @property \ApiClients\Client\GitHub\Schema\TimelineCommittedEvent\Tree $tree
 * @property array $parents
 * @property \ApiClients\Client\GitHub\Schema\TimelineCommittedEvent\Verification $verification
 * @property string $htmlUrl
 */
interface TimelineCommittedEvent
{
}
