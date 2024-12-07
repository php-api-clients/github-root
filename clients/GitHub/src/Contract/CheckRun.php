<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite;
use ApiClients\Client\GitHub\Schema\CheckRun\Output;
use ApiClients\Client\GitHub\Schema\DeploymentSimple;
use ApiClients\Client\GitHub\Schema\Integration;

/**
 * @property int $id
 * @property string $headSha
 * @property string $nodeId
 * @property ?string $externalId
 * @property string $url
 * @property ?string $htmlUrl
 * @property ?string $detailsUrl
 * @property string $status
 * @property ?string $conclusion
 * @property ?string $startedAt
 * @property ?string $completedAt
 * @property Output $output
 * @property string $name
 * @property ?CheckSuite $checkSuite
 * @property ?Integration $app
 * @property array $pullRequests
 * @property ?DeploymentSimple $deployment
 */
interface CheckRun
{
}
