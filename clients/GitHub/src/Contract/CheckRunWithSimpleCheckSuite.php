<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\Integration $app
 * @property \ApiClients\Client\GitHub\Schema\SimpleCheckSuite $checkSuite
 * @property ?string $completedAt
 * @property ?string $conclusion
 * @property ?\ApiClients\Client\GitHub\Schema\DeploymentSimple $deployment
 * @property string $detailsUrl
 * @property string $externalId
 * @property string $headSha
 * @property string $htmlUrl
 * @property int $id
 * @property string $name
 * @property string $nodeId
 * @property \ApiClients\Client\GitHub\Schema\CheckRunWithSimpleCheckSuite\Output $output
 * @property array $pullRequests
 * @property string $startedAt
 * @property string $status
 * @property string $url
 */
interface CheckRunWithSimpleCheckSuite
{
}
