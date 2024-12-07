<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\RepositoryAdvisoryCreate;

/**
 * @property \ApiClients\Client\GitHub\Schema\RepositoryAdvisoryCreate\Vulnerabilities\Package $package
 * @property ?string $vulnerableVersionRange
 * @property ?string $patchedVersions
 * @property ?array $vulnerableFunctions
 */
interface Vulnerabilities
{
}
