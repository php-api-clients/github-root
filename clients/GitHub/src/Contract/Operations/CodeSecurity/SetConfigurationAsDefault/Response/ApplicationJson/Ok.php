<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Operations\CodeSecurity\SetConfigurationAsDefault\Response\ApplicationJson;

use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration;

/**
 * @property ?string $defaultForNewRepos
 * @property ?CodeSecurityConfiguration $configuration
 */
interface Ok
{
}
