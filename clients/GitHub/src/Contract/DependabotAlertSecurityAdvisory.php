<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $ghsaId
 * @property ?string $cveId
 * @property string $summary
 * @property string $description
 * @property array $vulnerabilities
 * @property string $severity
 * @property \ApiClients\Client\GitHub\Schema\DependabotAlertSecurityAdvisory\Cvss $cvss
 * @property ?\ApiClients\Client\GitHub\Schema\CvssSeverities $cvssSeverities
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
