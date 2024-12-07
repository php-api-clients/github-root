<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookDeploymentCreated;

use ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\Creator;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\Payload\Zero;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp;

/**
 * @property string $createdAt
 * @property ?Creator $creator
 * @property ?string $description
 * @property string $environment
 * @property int $id
 * @property string $nodeId
 * @property string $originalEnvironment
 * @property Zero|string $payload
 * @property ?PerformedViaGithubApp $performedViaGithubApp
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
