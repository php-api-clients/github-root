<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AuthenticationToken;
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

    /** @return iterable<int,Schema\ServerStatistics> */
    public function getServerStatistics(string $enterpriseOrOrg, string $dateStart, string $dateEnd): iterable
    {
        return $this->operators->enterpriseAdmin👷GetServerStatistics()->call($enterpriseOrOrg, $dateStart, $dateEnd);
    }

    public function getGithubActionsPermissionsEnterprise(string $enterprise): ActionsEnterprisePermissions
    {
        return $this->operators->enterpriseAdmin👷GetGithubActionsPermissionsEnterprise()->call($enterprise);
    }

    public function setGithubActionsPermissionsEnterprise(string $enterprise, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetGithubActionsPermissionsEnterprise()->call($enterprise, $params);
    }

    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, int $perPage, int $page): Ok
    {
        return $this->operators->enterpriseAdmin👷ListSelectedOrganizationsEnabledGithubActionsEnterprise()->call($enterprise, $perPage, $page);
    }

    public function setSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetSelectedOrganizationsEnabledGithubActionsEnterprise()->call($enterprise, $params);
    }

    public function enableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷EnableSelectedOrganizationGithubActionsEnterprise()->call($enterprise, $orgId);
    }

    public function disableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DisableSelectedOrganizationGithubActionsEnterprise()->call($enterprise, $orgId);
    }

    public function getAllowedActionsEnterprise(string $enterprise): SelectedActions
    {
        return $this->operators->enterpriseAdmin👷GetAllowedActionsEnterprise()->call($enterprise);
    }

    public function setAllowedActionsEnterprise(string $enterprise, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetAllowedActionsEnterprise()->call($enterprise, $params);
    }

    public function listSelfHostedRunnerGroupsForEnterprise(string $enterprise, string $visibleToOrganization, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnerGroupsForEnterprise()->call($enterprise, $visibleToOrganization, $perPage, $page);
    }

    public function createSelfHostedRunnerGroupForEnterprise(string $enterprise, array $params): RunnerGroupsEnterprise
    {
        return $this->operators->enterpriseAdmin👷CreateSelfHostedRunnerGroupForEnterprise()->call($enterprise, $params);
    }

    public function getSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId): RunnerGroupsEnterprise
    {
        return $this->operators->enterpriseAdmin👷GetSelfHostedRunnerGroupForEnterprise()->call($enterprise, $runnerGroupId);
    }

    public function deleteSelfHostedRunnerGroupFromEnterprise(string $enterprise, int $runnerGroupId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteSelfHostedRunnerGroupFromEnterprise()->call($enterprise, $runnerGroupId);
    }

    public function updateSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): RunnerGroupsEnterprise
    {
        return $this->operators->enterpriseAdmin👷UpdateSelfHostedRunnerGroupForEnterprise()->call($enterprise, $runnerGroupId, $params);
    }

    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): Json
    {
        return $this->operators->enterpriseAdmin👷ListOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $perPage, $page);
    }

    public function setOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $params);
    }

    public function addOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $orgId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷AddOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $orgId);
    }

    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $orgId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $orgId);
    }

    public function listSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnersInGroupForEnterprise()->call($enterprise, $runnerGroupId, $perPage, $page);
    }

    public function setSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetSelfHostedRunnersInGroupForEnterprise()->call($enterprise, $runnerGroupId, $params);
    }

    public function addSelfHostedRunnerToGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷AddSelfHostedRunnerToGroupForEnterprise()->call($enterprise, $runnerGroupId, $runnerId);
    }

    public function removeSelfHostedRunnerFromGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷RemoveSelfHostedRunnerFromGroupForEnterprise()->call($enterprise, $runnerGroupId, $runnerId);
    }

    public function listSelfHostedRunnersForEnterprise(string $name, string $enterprise, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnersForEnterprise()->call($name, $enterprise, $perPage, $page);
    }

    /** @return iterable<int,Schema\RunnerApplication> */
    public function listRunnerApplicationsForEnterprise(string $enterprise): iterable
    {
        return $this->operators->enterpriseAdmin👷ListRunnerApplicationsForEnterprise()->call($enterprise);
    }

    public function createRegistrationTokenForEnterprise(string $enterprise): AuthenticationToken
    {
        return $this->operators->enterpriseAdmin👷CreateRegistrationTokenForEnterprise()->call($enterprise);
    }

    public function createRemoveTokenForEnterprise(string $enterprise): AuthenticationToken
    {
        return $this->operators->enterpriseAdmin👷CreateRemoveTokenForEnterprise()->call($enterprise);
    }

    public function getSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): Runner
    {
        return $this->operators->enterpriseAdmin👷GetSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    public function deleteSelfHostedRunnerFromEnterprise(string $enterprise, int $runnerId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteSelfHostedRunnerFromEnterprise()->call($enterprise, $runnerId);
    }

    public function listLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListLabelsForSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    public function setCustomLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷SetCustomLabelsForSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $params);
    }

    public function addCustomLabelsToSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷AddCustomLabelsToSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $params);
    }

    public function removeAllCustomLabelsFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->enterpriseAdmin👷RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    public function removeCustomLabelFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, string $name): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷RemoveCustomLabelFromSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $name);
    }

    /** @return iterable<int,Schema\AuditLogEvent> */
    public function getAuditLog(string $enterprise, string $phrase, string $include, string $after, string $before, string $order, int $page, int $perPage): iterable
    {
        return $this->operators->enterpriseAdmin👷GetAuditLog()->call($enterprise, $phrase, $include, $after, $before, $order, $page, $perPage);
    }

    /** @return iterable<int,Schema\AuditLogEvent> */
    public function getAuditLogListing(string $enterprise, string $phrase, string $include, string $after, string $before, string $order, int $page, int $perPage): iterable
    {
        return $this->operators->enterpriseAdmin👷GetAuditLogListing()->call($enterprise, $phrase, $include, $after, $before, $order, $page, $perPage);
    }

    public function getConsumedLicenses(string $enterprise, int $perPage, int $page): string
    {
        return $this->operators->enterpriseAdmin👷GetConsumedLicenses()->call($enterprise, $perPage, $page);
    }

    public function getLicenseSyncStatus(string $enterprise): string
    {
        return $this->operators->enterpriseAdmin👷GetLicenseSyncStatus()->call($enterprise);
    }

    public function listProvisionedGroupsEnterprise(string $filter, string $excludedAttributes, int $startIndex, int $count): ScimEnterpriseGroupList|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ListProvisionedGroupsEnterprise()->call($filter, $excludedAttributes, $startIndex, $count);
    }

    public function provisionEnterpriseGroup(array $params): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ProvisionEnterpriseGroup()->call($params);
    }

    public function getProvisioningInformationForEnterpriseGroup(string $scimGroupId, string $excludedAttributes): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetProvisioningInformationForEnterpriseGroup()->call($scimGroupId, $excludedAttributes);
    }

    public function setInformationForProvisionedEnterpriseGroup(string $scimGroupId, array $params): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetInformationForProvisionedEnterpriseGroup()->call($scimGroupId, $params);
    }

    public function deleteScimGroupFromEnterprise(string $scimGroupId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteScimGroupFromEnterprise()->call($scimGroupId);
    }

    public function updateAttributeForEnterpriseGroup(string $scimGroupId, array $params): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷UpdateAttributeForEnterpriseGroup()->call($scimGroupId, $params);
    }

    public function listProvisionedIdentitiesEnterprise(string $filter, int $startIndex, int $count): ScimEnterpriseUserList|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ListProvisionedIdentitiesEnterprise()->call($filter, $startIndex, $count);
    }

    public function provisionEnterpriseUser(array $params): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ProvisionEnterpriseUser()->call($params);
    }

    public function getProvisioningInformationForEnterpriseUser(string $scimUserId): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetProvisioningInformationForEnterpriseUser()->call($scimUserId);
    }

    public function setInformationForProvisionedEnterpriseUser(string $scimUserId, array $params): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetInformationForProvisionedEnterpriseUser()->call($scimUserId, $params);
    }

    public function deleteUserFromEnterprise(string $scimUserId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteUserFromEnterprise()->call($scimUserId);
    }

    public function updateAttributeForEnterpriseUser(string $scimUserId, array $params): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷UpdateAttributeForEnterpriseUser()->call($scimUserId, $params);
    }
}
