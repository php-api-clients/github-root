<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CvssSeverities;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Author;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Cvss;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory\PrivateFork;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Publisher;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Submission;

/**
 * @property string $ghsaId
 * @property ?string $cveId
 * @property string $url
 * @property string $htmlUrl
 * @property string $summary
 * @property ?string $description
 * @property ?string $severity
 * @property Author $author
 * @property Publisher $publisher
 * @property array $identifiers
 * @property string $state
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property ?string $publishedAt
 * @property ?string $closedAt
 * @property ?string $withdrawnAt
 * @property ?Submission $submission
 * @property ?array $vulnerabilities
 * @property ?Cvss $cvss
 * @property ?CvssSeverities $cvssSeverities
 * @property ?array $cwes
 * @property ?array $cweIds
 * @property ?array $credits
 * @property ?array $creditsDetailed
 * @property ?array $collaboratingUsers
 * @property ?array $collaboratingTeams
 * @property PrivateFork $privateFork
 */
interface RepositoryAdvisory
{
}
