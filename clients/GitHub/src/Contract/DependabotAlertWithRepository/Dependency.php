<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\DependabotAlertWithRepository;

use ApiClients\Client\GitHub\Schema\DependabotAlertPackage;

/**
 * @property ?DependabotAlertPackage $package
 * @property ?string $manifestPath
 * @property ?string $scope
 */
interface Dependency
{
}
