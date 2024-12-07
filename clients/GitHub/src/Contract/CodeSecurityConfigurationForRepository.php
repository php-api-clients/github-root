<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration;

/**
 * @property ?string $status
 * @property ?CodeSecurityConfiguration $configuration
 */
interface CodeSecurityConfigurationForRepository
{
}
