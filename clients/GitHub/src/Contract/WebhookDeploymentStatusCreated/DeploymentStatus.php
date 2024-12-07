<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookDeploymentStatusCreated;

/**
 * @property string $createdAt
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\DeploymentStatus\Creator $creator
 * @property string $deploymentUrl
 * @property string $description
 * @property string $environment
 * @property ?string $environmentUrl
 * @property int $id
 * @property ?string $logUrl
 * @property string $nodeId
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\DeploymentStatus\PerformedViaGithubApp $performedViaGithubApp
 * @property string $repositoryUrl
 * @property string $state
 * @property string $targetUrl
 * @property string $updatedAt
 * @property string $url
 */
interface DeploymentStatus
{
}
