<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCheckSuiteCompleted;

use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit;

/**
 * @property ?string $after
 * @property App $app
 * @property ?string $before
 * @property string $checkRunsUrl
 * @property ?string $conclusion
 * @property string $createdAt
 * @property ?string $headBranch
 * @property HeadCommit $headCommit
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
