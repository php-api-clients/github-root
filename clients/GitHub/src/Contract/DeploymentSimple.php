<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property int $id
 * @property string $nodeId
 * @property string $task
 * @property ?string $originalEnvironment
 * @property string $environment
 * @property ?string $description
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $statusesUrl
 * @property string $repositoryUrl
 * @property ?bool $transientEnvironment
 * @property ?bool $productionEnvironment
 * @property ?\ApiClients\Client\GitHub\Schema\Integration $performedViaGithubApp
 */
interface DeploymentSimple
{
}
