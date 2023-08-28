<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityAnalysisSettings;
use ApiClients\Client\GitHubEnterprise\Schema\SecretScanningAlert;

final class SecretScanning
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\EnterpriseSecurityAnalysisSettings */
    public function getSecurityAnalysisSettingsForEnterprise(string $enterprise): EnterpriseSecurityAnalysisSettings|array
    {
        return $this->operators->secretScanning👷GetSecurityAnalysisSettingsForEnterprise()->call($enterprise);
    }

    /** @return array{code:int} */
    public function patchSecurityAnalysisSettingsForEnterprise(string $enterprise, array $params): array
    {
        return $this->operators->secretScanning👷PatchSecurityAnalysisSettingsForEnterprise()->call($enterprise, $params);
    }

    /** @return iterable<Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForEnterprise(string $enterprise, string $state, string $secretType, string $resolution, string $before, string $after, string $sort, string $direction, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForEnterprise()->call($enterprise, $state, $secretType, $resolution, $before, $after, $sort, $direction, $perPage);
    }

    /** @return array{code:int} */
    public function postSecurityProductEnablementForEnterprise(string $enterprise, string $securityProduct, string $enablement): array
    {
        return $this->operators->secretScanning👷PostSecurityProductEnablementForEnterprise()->call($enterprise, $securityProduct, $enablement);
    }

    /** @return iterable<Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForOrg(string $org, string $state, string $secretType, string $resolution, string $before, string $after, string $sort, string $direction, int $page, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForOrg()->call($org, $state, $secretType, $resolution, $before, $after, $sort, $direction, $page, $perPage);
    }

    /** @return iterable<Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForOrgListing(string $org, string $state, string $secretType, string $resolution, string $before, string $after, string $sort, string $direction, int $page, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForOrgListing()->call($org, $state, $secretType, $resolution, $before, $after, $sort, $direction, $page, $perPage);
    }

    /** @return iterable<Schema\SecretScanningAlert>|array{code:int} */
    public function listAlertsForRepo(string $owner, string $repo, string $state, string $secretType, string $resolution, string $before, string $after, string $sort, string $direction, int $page, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForRepo()->call($owner, $repo, $state, $secretType, $resolution, $before, $after, $sort, $direction, $page, $perPage);
    }

    /** @return iterable<Schema\SecretScanningAlert>|array{code:int} */
    public function listAlertsForRepoListing(string $owner, string $repo, string $state, string $secretType, string $resolution, string $before, string $after, string $sort, string $direction, int $page, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForRepoListing()->call($owner, $repo, $state, $secretType, $resolution, $before, $after, $sort, $direction, $page, $perPage);
    }

    /** @return Schema\SecretScanningAlert|array{code:int} */
    public function getAlert(string $owner, string $repo, int $alertNumber): SecretScanningAlert|array
    {
        return $this->operators->secretScanning👷GetAlert()->call($owner, $repo, $alertNumber);
    }

    /** @return Schema\SecretScanningAlert|array{code:int} */
    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): SecretScanningAlert|array
    {
        return $this->operators->secretScanning👷UpdateAlert()->call($owner, $repo, $alertNumber, $params);
    }

    /** @return iterable<Schema\SecretScanningLocation>|array{code:int} */
    public function listLocationsForAlert(string $owner, string $repo, int $alertNumber, int $page, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListLocationsForAlert()->call($owner, $repo, $alertNumber, $page, $perPage);
    }

    /** @return iterable<Schema\SecretScanningLocation>|array{code:int} */
    public function listLocationsForAlertListing(string $owner, string $repo, int $alertNumber, int $page, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListLocationsForAlertListing()->call($owner, $repo, $alertNumber, $page, $perPage);
    }
}
