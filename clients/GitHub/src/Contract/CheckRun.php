<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

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
 * @property \ApiClients\Client\GitHub\Schema\CheckRun\Output $output
 * @property string $name
 * @property ?\ApiClients\Client\GitHub\Schema\CheckRun\CheckSuite $checkSuite
 * @property ?\ApiClients\Client\GitHub\Schema\Integration $app
 * @property array $pullRequests
 * @property ?\ApiClients\Client\GitHub\Schema\DeploymentSimple $deployment
 */
interface CheckRun
{
}
