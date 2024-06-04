<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AdvancedSecurityActiveCommitters;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\BillingUsageReport;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAllCostCenters;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Billing\AddResourceToCostCenter\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Billing\RemoveResourceFromCostCenter\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PackagesBillingUsage;

final class Billing
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getGithubActionsBillingGhe(string $enterprise): ActionsBillingUsage
    {
        return $this->operators->billing👷GetGithubActionsBillingGhe()->call($enterprise);
    }

    /** @return */
    public function getGithubAdvancedSecurityBillingGhe(string $enterprise, int $perPage, int $page): AdvancedSecurityActiveCommitters
    {
        return $this->operators->billing👷GetGithubAdvancedSecurityBillingGhe()->call($enterprise, $perPage, $page);
    }

    /** @return */
    public function getAllCostCenters(string $enterprise): GetAllCostCenters
    {
        return $this->operators->billing👷GetAllCostCenters()->call($enterprise);
    }

    /** @return */
    public function addResourceToCostCenter(string $enterprise, string $costCenterId, array $params): Ok
    {
        return $this->operators->billing👷AddResourceToCostCenter()->call($enterprise, $costCenterId, $params);
    }

    /** @return */
    public function removeResourceFromCostCenter(string $enterprise, string $costCenterId, array $params): Json
    {
        return $this->operators->billing👷RemoveResourceFromCostCenter()->call($enterprise, $costCenterId, $params);
    }

    /** @return */
    public function getGithubPackagesBillingGhe(string $enterprise): PackagesBillingUsage
    {
        return $this->operators->billing👷GetGithubPackagesBillingGhe()->call($enterprise);
    }

    /** @return */
    public function getSharedStorageBillingGhe(string $enterprise): CombinedBillingUsage
    {
        return $this->operators->billing👷GetSharedStorageBillingGhe()->call($enterprise);
    }

    /** @return */
    public function getGithubBillingUsageReportGhe(string $enterprise, int $year, int $month, int $day, int $hour, string $costCenterId): BillingUsageReport
    {
        return $this->operators->billing👷GetGithubBillingUsageReportGhe()->call($enterprise, $year, $month, $day, $hour, $costCenterId);
    }

    /** @return */
    public function getGithubActionsBillingOrg(string $org): ActionsBillingUsage
    {
        return $this->operators->billing👷GetGithubActionsBillingOrg()->call($org);
    }

    /** @return */
    public function getGithubAdvancedSecurityBillingOrg(string $org, int $perPage, int $page): AdvancedSecurityActiveCommitters
    {
        return $this->operators->billing👷GetGithubAdvancedSecurityBillingOrg()->call($org, $perPage, $page);
    }

    /** @return */
    public function getGithubPackagesBillingOrg(string $org): PackagesBillingUsage
    {
        return $this->operators->billing👷GetGithubPackagesBillingOrg()->call($org);
    }

    /** @return */
    public function getSharedStorageBillingOrg(string $org): CombinedBillingUsage
    {
        return $this->operators->billing👷GetSharedStorageBillingOrg()->call($org);
    }

    /** @return */
    public function getGithubActionsBillingUser(string $username): ActionsBillingUsage
    {
        return $this->operators->billing👷GetGithubActionsBillingUser()->call($username);
    }

    /** @return */
    public function getGithubPackagesBillingUser(string $username): PackagesBillingUsage
    {
        return $this->operators->billing👷GetGithubPackagesBillingUser()->call($username);
    }

    /** @return */
    public function getSharedStorageBillingUser(string $username): CombinedBillingUsage
    {
        return $this->operators->billing👷GetSharedStorageBillingUser()->call($username);
    }
}
