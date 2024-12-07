<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $url
 * @property int $id
 * @property string $nodeId
 * @property string $state
 * @property ?SimpleUser $creator
 * @property string $description
 * @property ?string $environment
 * @property string $targetUrl
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $deploymentUrl
 * @property string $repositoryUrl
 * @property ?string $environmentUrl
 * @property ?string $logUrl
 * @property ?Integration $performedViaGithubApp
 */
interface DeploymentStatus
{
}
