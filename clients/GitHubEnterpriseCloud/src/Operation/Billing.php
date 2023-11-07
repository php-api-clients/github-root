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

    public function getGithubActionsBillingGhe(string $enterprise): ActionsBillingUsage
    {
        return $this->operators->billing👷GetGithubActionsBillingGhe()->call($enterprise);
    }

    public function getGithubAdvancedSecurityBillingGhe(string $enterprise, int $perPage, int $page): AdvancedSecurityActiveCommitters
    {
        return $this->operators->billing👷GetGithubAdvancedSecurityBillingGhe()->call($enterprise, $perPage, $page);
    }

    public function getGithubPackagesBillingGhe(string $enterprise): PackagesBillingUsage
    {
        return $this->operators->billing👷GetGithubPackagesBillingGhe()->call($enterprise);
    }

    public function getSharedStorageBillingGhe(string $enterprise): CombinedBillingUsage
    {
        return $this->operators->billing👷GetSharedStorageBillingGhe()->call($enterprise);
    }

    public function getGithubActionsBillingOrg(string $org): ActionsBillingUsage
    {
        return $this->operators->billing👷GetGithubActionsBillingOrg()->call($org);
    }

    public function getGithubAdvancedSecurityBillingOrg(string $org, int $perPage, int $page): AdvancedSecurityActiveCommitters
    {
        return $this->operators->billing👷GetGithubAdvancedSecurityBillingOrg()->call($org, $perPage, $page);
    }

    public function getGithubPackagesBillingOrg(string $org): PackagesBillingUsage
    {
        return $this->operators->billing👷GetGithubPackagesBillingOrg()->call($org);
    }

    public function getSharedStorageBillingOrg(string $org): CombinedBillingUsage
    {
        return $this->operators->billing👷GetSharedStorageBillingOrg()->call($org);
    }

    public function getGithubActionsBillingUser(string $username): ActionsBillingUsage
    {
        return $this->operators->billing👷GetGithubActionsBillingUser()->call($username);
    }

    public function getGithubPackagesBillingUser(string $username): PackagesBillingUsage
    {
        return $this->operators->billing👷GetGithubPackagesBillingUser()->call($username);
    }

    public function getSharedStorageBillingUser(string $username): CombinedBillingUsage
    {
        return $this->operators->billing👷GetSharedStorageBillingUser()->call($username);
    }
}
