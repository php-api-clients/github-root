<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property int $id
 * @property string $nodeId
 * @property string $sha
 * @property string $ref
 * @property string $task
 * @property \ApiClients\Client\GitHub\Schema\Deployment\Payload\Zero|string $payload
 * @property ?string $originalEnvironment
 * @property string $environment
 * @property ?string $description
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $creator
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $statusesUrl
 * @property string $repositoryUrl
 * @property ?bool $transientEnvironment
 * @property ?bool $productionEnvironment
 * @property ?\ApiClients\Client\GitHub\Schema\Integration $performedViaGithubApp
 */
interface Deployment
{
}
