<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CheckRunWithSimpleCheckSuite\Output;
use ApiClients\Client\GitHub\Schema\DeploymentSimple;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\SimpleCheckSuite;

/**
 * @property ?Integration $app
 * @property SimpleCheckSuite $checkSuite
 * @property ?string $completedAt
 * @property ?string $conclusion
 * @property ?DeploymentSimple $deployment
 * @property string $detailsUrl
 * @property string $externalId
 * @property string $headSha
 * @property string $htmlUrl
 * @property int $id
 * @property string $name
 * @property string $nodeId
 * @property Output $output
 * @property array $pullRequests
 * @property string $startedAt
 * @property string $status
 * @property string $url
 */
interface CheckRunWithSimpleCheckSuite
{
}
