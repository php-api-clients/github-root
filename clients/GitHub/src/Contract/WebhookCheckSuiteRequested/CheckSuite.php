<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCheckSuiteRequested;

use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\App;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRequested\CheckSuite\HeadCommit;

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
