<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningAlert;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class SecretScanning
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function getSecurityAnalysisSettingsForEnterprise(string $enterprise): EnterpriseSecurityAnalysisSettings
    {
        return $this->operators->secretScanning👷GetSecurityAnalysisSettingsForEnterprise()->call($enterprise);
    }

    public function patchSecurityAnalysisSettingsForEnterprise(string $enterprise, array $params): WithoutBody
    {
        return $this->operators->secretScanning👷PatchSecurityAnalysisSettingsForEnterprise()->call($enterprise, $params);
    }

    /** @return iterable<int,Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForEnterprise(string $enterprise, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort, string $direction, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForEnterprise()->call($enterprise, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $perPage);
    }

    public function postSecurityProductEnablementForEnterprise(string $enterprise, string $securityProduct, string $enablement): WithoutBody
    {
        return $this->operators->secretScanning👷PostSecurityProductEnablementForEnterprise()->call($enterprise, $securityProduct, $enablement);
    }

    /** @return iterable<int,Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForOrg(string $org, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort, string $direction, int $page, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForOrg()->call($org, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $page, $perPage);
    }

    /** @return iterable<int,Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForOrgListing(string $org, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort, string $direction, int $page, int $perPage): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForOrgListing()->call($org, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $page, $perPage);
    }

    /** @return iterable<int,Schema\SecretScanningAlert>|WithoutBody */
    public function listAlertsForRepo(string $owner, string $repo, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort, string $direction, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListAlertsForRepo()->call($owner, $repo, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $page, $perPage);
    }

    /** @return iterable<int,Schema\SecretScanningAlert>|WithoutBody */
    public function listAlertsForRepoListing(string $owner, string $repo, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort, string $direction, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListAlertsForRepoListing()->call($owner, $repo, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $page, $perPage);
    }

    public function getAlert(string $owner, string $repo, int $alertNumber): SecretScanningAlert|WithoutBody
    {
        return $this->operators->secretScanning👷GetAlert()->call($owner, $repo, $alertNumber);
    }

    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): SecretScanningAlert|WithoutBody
    {
        return $this->operators->secretScanning👷UpdateAlert()->call($owner, $repo, $alertNumber, $params);
    }

    /** @return iterable<int,Schema\SecretScanningLocation>|WithoutBody */
    public function listLocationsForAlert(string $owner, string $repo, int $alertNumber, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListLocationsForAlert()->call($owner, $repo, $alertNumber, $page, $perPage);
    }

    /** @return iterable<int,Schema\SecretScanningLocation>|WithoutBody */
    public function listLocationsForAlertListing(string $owner, string $repo, int $alertNumber, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListLocationsForAlertListing()->call($owner, $repo, $alertNumber, $page, $perPage);
    }
}
