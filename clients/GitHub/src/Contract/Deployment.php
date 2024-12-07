<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Deployment\Payload\Zero;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $url
 * @property int $id
 * @property string $nodeId
 * @property string $sha
 * @property string $ref
 * @property string $task
 * @property Zero|string $payload
 * @property ?string $originalEnvironment
 * @property string $environment
 * @property ?string $description
 * @property ?SimpleUser $creator
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $statusesUrl
 * @property string $repositoryUrl
 * @property ?bool $transientEnvironment
 * @property ?bool $productionEnvironment
 * @property ?Integration $performedViaGithubApp
 */
interface Deployment
{
}
