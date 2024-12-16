<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalAdvisory;

final class SecurityAdvisories
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\GlobalAdvisory> */
    public function listGlobalAdvisories(string $ghsaId, string $cveId, string $ecosystem, string $severity, mixed $cwes, bool $isWithdrawn, mixed $affects, string $published, string $updated, string $modified, string $epssPercentage, string $epssPercentile, string $before, string $after, string $type, string $direction, int $perPage, string $sort): iterable
    {
        return $this->operators->securityAdvisories👷ListGlobalAdvisories()->call($ghsaId, $cveId, $ecosystem, $severity, $cwes, $isWithdrawn, $affects, $published, $updated, $modified, $epssPercentage, $epssPercentile, $before, $after, $type, $direction, $perPage, $sort);
    }

    /** @return */
    public function getGlobalAdvisory(string $ghsaId): GlobalAdvisory
    {
        return $this->operators->securityAdvisories👷GetGlobalAdvisory()->call($ghsaId);
    }
}
