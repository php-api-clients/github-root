<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $ghsaId
 * @property ?string $cveId
 * @property string $url
 * @property string $htmlUrl
 * @property string $summary
 * @property ?string $description
 * @property ?string $severity
 * @property \ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Author $author
 * @property \ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Publisher $publisher
 * @property array $identifiers
 * @property string $state
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property ?string $publishedAt
 * @property ?string $closedAt
 * @property ?string $withdrawnAt
 * @property ?\ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Submission $submission
 * @property ?array $vulnerabilities
 * @property ?\ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Cvss $cvss
 * @property ?\ApiClients\Client\GitHub\Schema\CvssSeverities $cvssSeverities
 * @property ?array $cwes
 * @property ?array $cweIds
 * @property ?array $credits
 * @property ?array $creditsDetailed
 * @property ?array $collaboratingUsers
 * @property ?array $collaboratingTeams
 * @property \ApiClients\Client\GitHub\Schema\RepositoryAdvisory\PrivateFork $privateFork
 */
interface RepositoryAdvisory
{
}
