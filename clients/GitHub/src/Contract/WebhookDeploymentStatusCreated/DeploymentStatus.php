<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookDeploymentStatusCreated;

use ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\DeploymentStatus\Creator;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\DeploymentStatus\PerformedViaGithubApp;

/**
 * @property string $createdAt
 * @property ?Creator $creator
 * @property string $deploymentUrl
 * @property string $description
 * @property string $environment
 * @property ?string $environmentUrl
 * @property int $id
 * @property ?string $logUrl
 * @property string $nodeId
 * @property ?PerformedViaGithubApp $performedViaGithubApp
 * @property string $repositoryUrl
 * @property string $state
 * @property string $targetUrl
 * @property string $updatedAt
 * @property string $url
 */
interface DeploymentStatus
{
}
