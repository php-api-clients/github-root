<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CvssSeverities;
use ApiClients\Client\GitHub\Schema\WebhooksSecurityAdvisory\Cvss;

/**
 * @property Cvss $cvss
 * @property ?CvssSeverities $cvssSeverities
 * @property array $cwes
 * @property string $description
 * @property string $ghsaId
 * @property array $identifiers
 * @property string $publishedAt
 * @property array $references
 * @property string $severity
 * @property string $summary
 * @property string $updatedAt
 * @property array $vulnerabilities
 * @property ?string $withdrawnAt
 */
interface WebhooksSecurityAdvisory
{
}
