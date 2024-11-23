<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AuditLogStreamKey;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AuthenticationToken;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAuditLogStreamConfig;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GroupResponse;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Runner;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimEnterpriseGroupList;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimEnterpriseUserList;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SelectedActions;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\UserResponse;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class EnterpriseAdmin
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\ServerStatistics> */
    public function getServerStatistics(string $enterpriseOrOrg, string $dateStart, string $dateEnd): iterable
    {
        return $this->operators->enterpriseAdmin👷GetServerStatistics()->call($enterpriseOrOrg, $dateStart, $dateEnd);
    }

    /** @return */
    public function getGithubActionsPermissionsEnterprise(string $enterprise): ActionsEnterprisePermissions
    {
        return $this->operators->enterpriseAdmin👷GetGithubActionsPermissionsEnterprise()->call($enterprise);
    }

    /** @return */
    public function setGithubActionsPermissionsEnterprise(string $enterprise, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetGithubActionsPermissionsEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, int $perPage, int $page): Ok
    {
        return $this->operators->enterpriseAdmin👷ListSelectedOrganizationsEnabledGithubActionsEnterprise()->call($enterprise, $perPage, $page);
    }

    /** @return */
    public function setSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetSelectedOrganizationsEnabledGithubActionsEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function enableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷EnableSelectedOrganizationGithubActionsEnterprise()->call($enterprise, $orgId);
    }

    /** @return */
    public function disableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DisableSelectedOrganizationGithubActionsEnterprise()->call($enterprise, $orgId);
    }

    /** @return */
    public function getAllowedActionsEnterprise(string $enterprise): SelectedActions
    {
        return $this->operators->enterpriseAdmin👷GetAllowedActionsEnterprise()->call($enterprise);
    }

    /** @return */
    public function setAllowedActionsEnterprise(string $enterprise, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetAllowedActionsEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function listSelfHostedRunnerGroupsForEnterprise(string $enterprise, string $visibleToOrganization, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnerGroupsForEnterprise()->call($enterprise, $visibleToOrganization, $perPage, $page);
    }

    /** @return */
    public function createSelfHostedRunnerGroupForEnterprise(string $enterprise, array $params): RunnerGroupsEnterprise
    {
        return $this->operators->enterpriseAdmin👷CreateSelfHostedRunnerGroupForEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function getSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId): RunnerGroupsEnterprise
    {
        return $this->operators->enterpriseAdmin👷GetSelfHostedRunnerGroupForEnterprise()->call($enterprise, $runnerGroupId);
    }

    /** @return */
    public function deleteSelfHostedRunnerGroupFromEnterprise(string $enterprise, int $runnerGroupId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteSelfHostedRunnerGroupFromEnterprise()->call($enterprise, $runnerGroupId);
    }

    /** @return */
    public function updateSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): RunnerGroupsEnterprise
    {
        return $this->operators->enterpriseAdmin👷UpdateSelfHostedRunnerGroupForEnterprise()->call($enterprise, $runnerGroupId, $params);
    }

    /** @return */
    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): Json
    {
        return $this->operators->enterpriseAdmin👷ListOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $perPage, $page);
    }

    /** @return */
    public function setOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $params);
    }

    /** @return */
    public function addOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $orgId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷AddOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $orgId);
    }

    /** @return */
    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $orgId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $orgId);
    }

    /** @return */
    public function listSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnersInGroupForEnterprise()->call($enterprise, $runnerGroupId, $perPage, $page);
    }

    /** @return */
    public function setSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetSelfHostedRunnersInGroupForEnterprise()->call($enterprise, $runnerGroupId, $params);
    }

    /** @return */
    public function addSelfHostedRunnerToGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷AddSelfHostedRunnerToGroupForEnterprise()->call($enterprise, $runnerGroupId, $runnerId);
    }

    /** @return */
    public function removeSelfHostedRunnerFromGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷RemoveSelfHostedRunnerFromGroupForEnterprise()->call($enterprise, $runnerGroupId, $runnerId);
    }

    /** @return */
    public function listSelfHostedRunnersForEnterprise(string $name, string $enterprise, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnersForEnterprise()->call($name, $enterprise, $perPage, $page);
    }

    /** @return Observable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForEnterprise(string $enterprise): iterable
    {
        return $this->operators->enterpriseAdmin👷ListRunnerApplicationsForEnterprise()->call($enterprise);
    }

    /** @return */
    public function createRegistrationTokenForEnterprise(string $enterprise): AuthenticationToken
    {
        return $this->operators->enterpriseAdmin👷CreateRegistrationTokenForEnterprise()->call($enterprise);
    }

    /** @return */
    public function createRemoveTokenForEnterprise(string $enterprise): AuthenticationToken
    {
        return $this->operators->enterpriseAdmin👷CreateRemoveTokenForEnterprise()->call($enterprise);
    }

    /** @return */
    public function getSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): Runner
    {
        return $this->operators->enterpriseAdmin👷GetSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    /** @return */
    public function deleteSelfHostedRunnerFromEnterprise(string $enterprise, int $runnerId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteSelfHostedRunnerFromEnterprise()->call($enterprise, $runnerId);
    }

    /** @return */
    public function listLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListLabelsForSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    /** @return */
    public function setCustomLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷SetCustomLabelsForSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $params);
    }

    /** @return */
    public function addCustomLabelsToSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷AddCustomLabelsToSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $params);
    }

    /** @return */
    public function removeAllCustomLabelsFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->enterpriseAdmin👷RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    /** @return */
    public function removeCustomLabelFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, string $name): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷RemoveCustomLabelFromSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $name);
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function getAuditLog(string $enterprise, string $phrase, string $include, string $after, string $before, string $order, int $page, int $perPage): iterable
    {
        return $this->operators->enterpriseAdmin👷GetAuditLog()->call($enterprise, $phrase, $include, $after, $before, $order, $page, $perPage);
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function getAuditLogListing(string $enterprise, string $phrase, string $include, string $after, string $before, string $order, int $page, int $perPage): iterable
    {
        return $this->operators->enterpriseAdmin👷GetAuditLogListing()->call($enterprise, $phrase, $include, $after, $before, $order, $page, $perPage);
    }

    /** @return */
    public function getAuditLogStreamKey(string $enterprise): AuditLogStreamKey
    {
        return $this->operators->enterpriseAdmin👷GetAuditLogStreamKey()->call($enterprise);
    }

    /** @return Observable<Schema\GetAuditLogStreamConfigs> */
    public function getAuditLogStreams(string $enterprise): iterable
    {
        return $this->operators->enterpriseAdmin👷GetAuditLogStreams()->call($enterprise);
    }

    /** @return */
    public function createAuditLogStream(string $enterprise, array $params): GetAuditLogStreamConfig
    {
        return $this->operators->enterpriseAdmin👷CreateAuditLogStream()->call($enterprise, $params);
    }

    /** @return */
    public function getOneAuditLogStream(string $enterprise, int $streamId): GetAuditLogStreamConfig
    {
        return $this->operators->enterpriseAdmin👷GetOneAuditLogStream()->call($enterprise, $streamId);
    }

    /** @return */
    public function updateAuditLogStream(string $enterprise, int $streamId, array $params): GetAuditLogStreamConfig
    {
        return $this->operators->enterpriseAdmin👷UpdateAuditLogStream()->call($enterprise, $streamId, $params);
    }

    /** @return */
    public function deleteAuditLogStream(string $enterprise, int $streamId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteAuditLogStream()->call($enterprise, $streamId);
    }

    /** @return */
    public function getConsumedLicenses(string $enterprise, int $perPage, int $page): string
    {
        return $this->operators->enterpriseAdmin👷GetConsumedLicenses()->call($enterprise, $perPage, $page);
    }

    /** @return */
    public function getLicenseSyncStatus(string $enterprise): string
    {
        return $this->operators->enterpriseAdmin👷GetLicenseSyncStatus()->call($enterprise);
    }

    /** @return */
    public function listProvisionedGroupsEnterprise(string $filter, string $excludedAttributes, string $enterprise, int $startIndex, int $count): ScimEnterpriseGroupList|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ListProvisionedGroupsEnterprise()->call($filter, $excludedAttributes, $enterprise, $startIndex, $count);
    }

    /** @return */
    public function provisionEnterpriseGroup(string $enterprise, array $params): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ProvisionEnterpriseGroup()->call($enterprise, $params);
    }

    /** @return */
    public function getProvisioningInformationForEnterpriseGroup(string $scimGroupId, string $excludedAttributes, string $enterprise): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetProvisioningInformationForEnterpriseGroup()->call($scimGroupId, $excludedAttributes, $enterprise);
    }

    /** @return */
    public function setInformationForProvisionedEnterpriseGroup(string $scimGroupId, string $enterprise, array $params): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetInformationForProvisionedEnterpriseGroup()->call($scimGroupId, $enterprise, $params);
    }

    /** @return */
    public function deleteScimGroupFromEnterprise(string $scimGroupId, string $enterprise): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteScimGroupFromEnterprise()->call($scimGroupId, $enterprise);
    }

    /** @return */
    public function updateAttributeForEnterpriseGroup(string $scimGroupId, string $enterprise, array $params): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷UpdateAttributeForEnterpriseGroup()->call($scimGroupId, $enterprise, $params);
    }

    /** @return */
    public function listProvisionedIdentitiesEnterprise(string $filter, string $enterprise, int $startIndex, int $count): ScimEnterpriseUserList|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ListProvisionedIdentitiesEnterprise()->call($filter, $enterprise, $startIndex, $count);
    }

    /** @return */
    public function provisionEnterpriseUser(string $enterprise, array $params): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ProvisionEnterpriseUser()->call($enterprise, $params);
    }

    /** @return */
    public function getProvisioningInformationForEnterpriseUser(string $scimUserId, string $enterprise): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetProvisioningInformationForEnterpriseUser()->call($scimUserId, $enterprise);
    }

    /** @return */
    public function setInformationForProvisionedEnterpriseUser(string $scimUserId, string $enterprise, array $params): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetInformationForProvisionedEnterpriseUser()->call($scimUserId, $enterprise, $params);
    }

    /** @return */
    public function deleteUserFromEnterprise(string $scimUserId, string $enterprise): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteUserFromEnterprise()->call($scimUserId, $enterprise);
    }

    /** @return */
    public function updateAttributeForEnterpriseUser(string $scimUserId, string $enterprise, array $params): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷UpdateAttributeForEnterpriseUser()->call($scimUserId, $enterprise, $params);
    }
}
