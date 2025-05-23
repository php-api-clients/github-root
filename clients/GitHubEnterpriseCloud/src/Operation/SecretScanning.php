<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\SecretScanning\ReviewBypassRequest\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningAlert;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningBypassRequest;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningPushProtectionBypass;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningScanHistory;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class SecretScanning
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getSecurityAnalysisSettingsForEnterprise(string $enterprise): EnterpriseSecurityAnalysisSettings
    {
        return $this->operators->secretScanning👷GetSecurityAnalysisSettingsForEnterprise()->call($enterprise);
    }

    /** @return */
    public function patchSecurityAnalysisSettingsForEnterprise(string $enterprise, array $params): WithoutBody
    {
        return $this->operators->secretScanning👷PatchSecurityAnalysisSettingsForEnterprise()->call($enterprise, $params);
    }

    /** @return Observable<Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForEnterprise(string $enterprise, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort, string $direction, int $perPage, bool $isPubliclyLeaked, bool $isMultiRepo): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForEnterprise()->call($enterprise, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $perPage, $isPubliclyLeaked, $isMultiRepo);
    }

    /** @return */
    public function postSecurityProductEnablementForEnterprise(string $enterprise, string $securityProduct, string $enablement): WithoutBody
    {
        return $this->operators->secretScanning👷PostSecurityProductEnablementForEnterprise()->call($enterprise, $securityProduct, $enablement);
    }

    /** @return Observable<Schema\SecretScanningBypassRequest> */
    public function listOrgBypassRequests(string $org, string $repositoryName, string $reviewer, string $requester, string $timePeriod, string $requestStatus, int $perPage, int $page): iterable
    {
        return $this->operators->secretScanning👷ListOrgBypassRequests()->call($org, $repositoryName, $reviewer, $requester, $timePeriod, $requestStatus, $perPage, $page);
    }

    /** @return Observable<Schema\SecretScanningBypassRequest> */
    public function listOrgBypassRequestsListing(string $org, string $repositoryName, string $reviewer, string $requester, string $timePeriod, string $requestStatus, int $perPage, int $page): iterable
    {
        return $this->operators->secretScanning👷ListOrgBypassRequestsListing()->call($org, $repositoryName, $reviewer, $requester, $timePeriod, $requestStatus, $perPage, $page);
    }

    /** @return Observable<Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForOrg(string $org, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort, string $direction, int $page, int $perPage, bool $isPubliclyLeaked, bool $isMultiRepo): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForOrg()->call($org, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $page, $perPage, $isPubliclyLeaked, $isMultiRepo);
    }

    /** @return Observable<Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForOrgListing(string $org, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort, string $direction, int $page, int $perPage, bool $isPubliclyLeaked, bool $isMultiRepo): iterable
    {
        return $this->operators->secretScanning👷ListAlertsForOrgListing()->call($org, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $page, $perPage, $isPubliclyLeaked, $isMultiRepo);
    }

    /** @return Observable<Schema\SecretScanningBypassRequest> */
    public function listRepoBypassRequests(string $owner, string $repo, string $reviewer, string $requester, string $timePeriod, string $requestStatus, int $perPage, int $page): iterable
    {
        return $this->operators->secretScanning👷ListRepoBypassRequests()->call($owner, $repo, $reviewer, $requester, $timePeriod, $requestStatus, $perPage, $page);
    }

    /** @return Observable<Schema\SecretScanningBypassRequest> */
    public function listRepoBypassRequestsListing(string $owner, string $repo, string $reviewer, string $requester, string $timePeriod, string $requestStatus, int $perPage, int $page): iterable
    {
        return $this->operators->secretScanning👷ListRepoBypassRequestsListing()->call($owner, $repo, $reviewer, $requester, $timePeriod, $requestStatus, $perPage, $page);
    }

    /** @return */
    public function getBypassRequest(string $owner, string $repo, int $bypassRequestNumber): SecretScanningBypassRequest
    {
        return $this->operators->secretScanning👷GetBypassRequest()->call($owner, $repo, $bypassRequestNumber);
    }

    /** @return */
    public function reviewBypassRequest(string $owner, string $repo, int $bypassRequestNumber, array $params): Ok
    {
        return $this->operators->secretScanning👷ReviewBypassRequest()->call($owner, $repo, $bypassRequestNumber, $params);
    }

    /** @return */
    public function dismissBypassResponse(string $owner, string $repo, int $bypassResponseId): WithoutBody
    {
        return $this->operators->secretScanning👷DismissBypassResponse()->call($owner, $repo, $bypassResponseId);
    }

    /** @return Observable<Schema\SecretScanningAlert>|WithoutBody */
    public function listAlertsForRepo(string $owner, string $repo, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort, string $direction, int $page, int $perPage, bool $isPubliclyLeaked, bool $isMultiRepo): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListAlertsForRepo()->call($owner, $repo, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $page, $perPage, $isPubliclyLeaked, $isMultiRepo);
    }

    /** @return Observable<Schema\SecretScanningAlert>|WithoutBody */
    public function listAlertsForRepoListing(string $owner, string $repo, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort, string $direction, int $page, int $perPage, bool $isPubliclyLeaked, bool $isMultiRepo): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListAlertsForRepoListing()->call($owner, $repo, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $page, $perPage, $isPubliclyLeaked, $isMultiRepo);
    }

    /** @return */
    public function getAlert(string $owner, string $repo, int $alertNumber): SecretScanningAlert|WithoutBody
    {
        return $this->operators->secretScanning👷GetAlert()->call($owner, $repo, $alertNumber);
    }

    /** @return */
    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): SecretScanningAlert|WithoutBody
    {
        return $this->operators->secretScanning👷UpdateAlert()->call($owner, $repo, $alertNumber, $params);
    }

    /** @return Observable<Schema\SecretScanningLocation>|WithoutBody */
    public function listLocationsForAlert(string $owner, string $repo, int $alertNumber, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListLocationsForAlert()->call($owner, $repo, $alertNumber, $page, $perPage);
    }

    /** @return Observable<Schema\SecretScanningLocation>|WithoutBody */
    public function listLocationsForAlertListing(string $owner, string $repo, int $alertNumber, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->secretScanning👷ListLocationsForAlertListing()->call($owner, $repo, $alertNumber, $page, $perPage);
    }

    /** @return */
    public function createPushProtectionBypass(string $owner, string $repo, array $params): SecretScanningPushProtectionBypass|WithoutBody
    {
        return $this->operators->secretScanning👷CreatePushProtectionBypass()->call($owner, $repo, $params);
    }

    /** @return */
    public function getScanHistory(string $owner, string $repo): SecretScanningScanHistory|WithoutBody
    {
        return $this->operators->secretScanning👷GetScanHistory()->call($owner, $repo);
    }
}
