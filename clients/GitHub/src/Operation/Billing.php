<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHub\Schema\BillingUsageReport;
use ApiClients\Client\GitHub\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHub\Schema\PackagesBillingUsage;

final class Billing
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getGithubBillingUsageReportOrg(string $org, int $year, int $month, int $day, int $hour): BillingUsageReport
    {
        return $this->operators->billing👷GetGithubBillingUsageReportOrg()->call($org, $year, $month, $day, $hour);
    }

    /** @return */
    public function getGithubActionsBillingOrg(string $org): ActionsBillingUsage
    {
        return $this->operators->billing👷GetGithubActionsBillingOrg()->call($org);
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
