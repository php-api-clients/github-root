<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\CreateDeploymentStatus\Request;

/**
 * @property string $state
 * @property ?string $targetUrl
 * @property ?string $logUrl
 * @property ?string $description
 * @property ?string $environment
 * @property ?string $environmentUrl
 * @property ?bool $autoInactive
 */
interface ApplicationJson
{
}
