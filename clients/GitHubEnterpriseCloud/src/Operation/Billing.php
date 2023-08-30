<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AdvancedSecurityActiveCommitters;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PackagesBillingUsage;

final class Billing
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getGithubActionsBillingGhe(string $enterprise): ActionsBillingUsage|array
    {
        return $this->operators->billing👷GetGithubActionsBillingGhe()->call($enterprise);
    }

    /** @return */
    public function getGithubAdvancedSecurityBillingGhe(string $enterprise, int $perPage, int $page): AdvancedSecurityActiveCommitters|array
    {
        return $this->operators->billing👷GetGithubAdvancedSecurityBillingGhe()->call($enterprise, $perPage, $page);
    }

    /** @return */
    public function getGithubPackagesBillingGhe(string $enterprise): PackagesBillingUsage|array
    {
        return $this->operators->billing👷GetGithubPackagesBillingGhe()->call($enterprise);
    }

    /** @return */
    public function getSharedStorageBillingGhe(string $enterprise): CombinedBillingUsage|array
    {
        return $this->operators->billing👷GetSharedStorageBillingGhe()->call($enterprise);
    }

    /** @return */
    public function getGithubActionsBillingOrg(string $org): ActionsBillingUsage|array
    {
        return $this->operators->billing👷GetGithubActionsBillingOrg()->call($org);
    }

    /** @return */
    public function getGithubAdvancedSecurityBillingOrg(string $org, int $perPage, int $page): AdvancedSecurityActiveCommitters|array
    {
        return $this->operators->billing👷GetGithubAdvancedSecurityBillingOrg()->call($org, $perPage, $page);
    }

    /** @return */
    public function getGithubPackagesBillingOrg(string $org): PackagesBillingUsage|array
    {
        return $this->operators->billing👷GetGithubPackagesBillingOrg()->call($org);
    }

    /** @return */
    public function getSharedStorageBillingOrg(string $org): CombinedBillingUsage|array
    {
        return $this->operators->billing👷GetSharedStorageBillingOrg()->call($org);
    }

    /** @return */
    public function getGithubActionsBillingUser(string $username): ActionsBillingUsage|array
    {
        return $this->operators->billing👷GetGithubActionsBillingUser()->call($username);
    }

    /** @return */
    public function getGithubPackagesBillingUser(string $username): PackagesBillingUsage|array
    {
        return $this->operators->billing👷GetGithubPackagesBillingUser()->call($username);
    }

    /** @return */
    public function getSharedStorageBillingUser(string $username): CombinedBillingUsage|array
    {
        return $this->operators->billing👷GetSharedStorageBillingUser()->call($username);
    }
}
