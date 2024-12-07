<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CvssSeverities;
use ApiClients\Client\GitHub\Schema\GlobalAdvisory\Cvss;
use ApiClients\Client\GitHub\Schema\GlobalAdvisory\Epss;

/**
 * @property string $ghsaId
 * @property ?string $cveId
 * @property string $url
 * @property string $htmlUrl
 * @property ?string $repositoryAdvisoryUrl
 * @property string $summary
 * @property ?string $description
 * @property string $type
 * @property string $severity
 * @property ?string $sourceCodeLocation
 * @property ?array $identifiers
 * @property ?array $references
 * @property string $publishedAt
 * @property string $updatedAt
 * @property ?string $githubReviewedAt
 * @property ?string $nvdPublishedAt
 * @property ?string $withdrawnAt
 * @property ?array $vulnerabilities
 * @property ?Cvss $cvss
 * @property ?CvssSeverities $cvssSeverities
 * @property ?array $cwes
 * @property ?Epss $epss
 * @property ?array $credits
 */
interface GlobalAdvisory
{
}
