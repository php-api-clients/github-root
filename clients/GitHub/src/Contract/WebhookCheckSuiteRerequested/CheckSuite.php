<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookCheckSuiteRerequested;

/**
 * @property ?string $after
 * @property \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App $app
 * @property ?string $before
 * @property string $checkRunsUrl
 * @property ?string $conclusion
 * @property string $createdAt
 * @property ?string $headBranch
 * @property \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit $headCommit
 * @property string $headSha
 * @property int $id
 * @property int $latestCheckRunsCount
 * @property string $nodeId
 * @property array $pullRequests
 * @property ?bool $rerequestable
 * @property ?bool $runsRerequestable
 * @property ?string $status
 * @property string $updatedAt
 * @property string $url
 */
interface CheckSuite
{
}
