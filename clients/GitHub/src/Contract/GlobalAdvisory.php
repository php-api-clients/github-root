<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

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
 * @property ?\ApiClients\Client\GitHub\Schema\GlobalAdvisory\Cvss $cvss
 * @property ?\ApiClients\Client\GitHub\Schema\CvssSeverities $cvssSeverities
 * @property ?array $cwes
 * @property ?\ApiClients\Client\GitHub\Schema\GlobalAdvisory\Epss $epss
 * @property ?array $credits
 */
interface GlobalAdvisory
{
}
