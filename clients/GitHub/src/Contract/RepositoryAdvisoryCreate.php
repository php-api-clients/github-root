<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $summary
 * @property string $description
 * @property ?string $cveId
 * @property array $vulnerabilities
 * @property ?array $cweIds
 * @property ?array $credits
 * @property ?string $severity
 * @property ?string $cvssVectorString
 * @property ?bool $startPrivateFork
 */
interface RepositoryAdvisoryCreate
{
}
