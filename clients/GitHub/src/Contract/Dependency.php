<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Metadata;

/**
 * @property ?string $packageUrl
 * @property ?Metadata $metadata
 * @property ?string $relationship
 * @property ?string $scope
 * @property ?array $dependencies
 */
interface Dependency
{
}
