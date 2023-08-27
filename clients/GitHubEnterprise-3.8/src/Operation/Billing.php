<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Operators;
use ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters;

final class Billing
{
    public function __construct(private Operators $operators)
    {
    }

    /** @return */
    public function getGithubAdvancedSecurityBillingGhe(string $enterprise, int $perPage, int $page): AdvancedSecurityActiveCommitters|array
    {
        return $this->operators->billing👷GetGithubAdvancedSecurityBillingGhe()->call($enterprise, $perPage, $page);
    }

    /** @return */
    public function getGithubAdvancedSecurityBillingOrg(string $org, int $perPage, int $page): AdvancedSecurityActiveCommitters|array
    {
        return $this->operators->billing👷GetGithubAdvancedSecurityBillingOrg()->call($org, $perPage, $page);
    }
}
