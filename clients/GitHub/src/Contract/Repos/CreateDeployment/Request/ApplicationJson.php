<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Repos\CreateDeployment\Request;

/**
 * @property string $ref
 * @property ?string $task
 * @property ?bool $autoMerge
 * @property ?array $requiredContexts
 * @property null|\ApiClients\Client\GitHub\Schema\Repos\CreateDeployment\Request\ApplicationJson\Payload\Zero|string $payload
 * @property ?string $environment
 * @property ?string $description
 * @property ?bool $transientEnvironment
 * @property ?bool $productionEnvironment
 */
interface ApplicationJson
{
}
