<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookDeploymentStatusCreated;

/**
 * @property string $createdAt
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\Deployment\Creator $creator
 * @property ?string $description
 * @property string $environment
 * @property int $id
 * @property string $nodeId
 * @property string $originalEnvironment
 * @property string|\ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\Deployment\Payload\One $payload
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\Deployment\PerformedViaGithubApp $performedViaGithubApp
 * @property ?bool $productionEnvironment
 * @property string $ref
 * @property string $repositoryUrl
 * @property string $sha
 * @property string $statusesUrl
 * @property string $task
 * @property ?bool $transientEnvironment
 * @property string $updatedAt
 * @property string $url
 */
interface Deployment
{
}
