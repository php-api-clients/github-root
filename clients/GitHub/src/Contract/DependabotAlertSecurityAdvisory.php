<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CvssSeverities;
use ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cvss;

/**
 * @property string $ghsaId
 * @property ?string $cveId
 * @property string $summary
 * @property string $description
 * @property array $vulnerabilities
 * @property string $severity
 * @property Cvss $cvss
 * @property ?CvssSeverities $cvssSeverities
 * @property array $cwes
 * @property array $identifiers
 * @property array $references
 * @property string $publishedAt
 * @property string $updatedAt
 * @property ?string $withdrawnAt
 */
interface DependabotAlertSecurityAdvisory
{
}
