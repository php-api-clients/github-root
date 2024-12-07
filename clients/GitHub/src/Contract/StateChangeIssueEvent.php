<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $url
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $actor
 * @property string $event
 * @property ?string $commitId
 * @property ?string $commitUrl
 * @property string $createdAt
 * @property ?\ApiClients\Client\GitHub\Schema\Integration $performedViaGithubApp
 * @property ?string $stateReason
 */
interface StateChangeIssueEvent
{
}
