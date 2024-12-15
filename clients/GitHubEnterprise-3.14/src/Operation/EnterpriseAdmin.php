<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubEnterprise\Schema\Announcement;
use ApiClients\Client\GitHubEnterprise\Schema\AuthenticationToken;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\ConfigurationStatus;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityProductsOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview;
use ApiClients\Client\GitHubEnterprise\Schema\GhesChecksSystemRequirements;
use ApiClients\Client\GitHubEnterprise\Schema\GhesClusterStatus;
use ApiClients\Client\GitHubEnterprise\Schema\GhesConfigNodes;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings;
use ApiClients\Client\GitHubEnterprise\Schema\GhesLicenseCheck;
use ApiClients\Client\GitHubEnterprise\Schema\GhesLicenseInfo;
use ApiClients\Client\GitHubEnterprise\Schema\GhesReplicationStatus;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook2;
use ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;
use ApiClients\Client\GitHubEnterprise\Schema\LdapMappingTeam;
use ApiClients\Client\GitHubEnterprise\Schema\LdapMappingUser;
use ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo;
use ApiClients\Client\GitHubEnterprise\Schema\MaintenanceStatus;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\SyncLdapMappingForTeam\Response\ApplicationJson\Created;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\SyncLdapMappingForUser\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\UpdateOrgName\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationSimple;
use ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\Runner;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList;
use ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList;
use ApiClients\Client\GitHubEnterprise\Schema\SelectedActions;
use ApiClients\Client\GitHubEnterprise\Schema\SimpleUser;
use ApiClients\Client\GitHubEnterprise\Schema\UserResponse;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class EnterpriseAdmin
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,Schema\GlobalHook> */
    public function listGlobalWebhooks(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListGlobalWebhooks()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\GlobalHook> */
    public function listGlobalWebhooksListing(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListGlobalWebhooksListing()->call($perPage, $page);
    }

    public function createGlobalWebhook(array $params): GlobalHook
    {
        return $this->operators->enterpriseAdmin👷CreateGlobalWebhook()->call($params);
    }

    public function getGlobalWebhook(int $hookId): GlobalHook
    {
        return $this->operators->enterpriseAdmin👷GetGlobalWebhook()->call($hookId);
    }

    public function deleteGlobalWebhook(int $hookId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteGlobalWebhook()->call($hookId);
    }

    public function updateGlobalWebhook(int $hookId, array $params): GlobalHook2
    {
        return $this->operators->enterpriseAdmin👷UpdateGlobalWebhook()->call($hookId, $params);
    }

    public function pingGlobalWebhook(int $hookId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷PingGlobalWebhook()->call($hookId);
    }

    /** @return iterable<int,Schema\PublicKeyFull> */
    public function listPublicKeys(string $since, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPublicKeys()->call($since, $perPage, $page, $direction, $sort);
    }

    /** @return iterable<int,Schema\PublicKeyFull> */
    public function listPublicKeysListing(string $since, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPublicKeysListing()->call($since, $perPage, $page, $direction, $sort);
    }

    public function deletePublicKey(string $keyIds): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeletePublicKey()->call($keyIds);
    }

    public function updateLdapMappingForTeam(int $teamId, array $params): LdapMappingTeam
    {
        return $this->operators->enterpriseAdmin👷UpdateLdapMappingForTeam()->call($teamId, $params);
    }

    public function syncLdapMappingForTeam(int $teamId): Created
    {
        return $this->operators->enterpriseAdmin👷SyncLdapMappingForTeam()->call($teamId);
    }

    public function updateLdapMappingForUser(string $username, array $params): LdapMappingUser
    {
        return $this->operators->enterpriseAdmin👷UpdateLdapMappingForUser()->call($username, $params);
    }

    public function syncLdapMappingForUser(string $username): Json
    {
        return $this->operators->enterpriseAdmin👷SyncLdapMappingForUser()->call($username);
    }

    public function createOrg(array $params): OrganizationSimple
    {
        return $this->operators->enterpriseAdmin👷CreateOrg()->call($params);
    }

    public function updateOrgName(string $org, array $params): Accepted
    {
        return $this->operators->enterpriseAdmin👷UpdateOrgName()->call($org, $params);
    }

    /** @return iterable<int,Schema\PreReceiveEnvironment> */
    public function listPreReceiveEnvironments(int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveEnvironments()->call($perPage, $page, $direction, $sort);
    }

    /** @return iterable<int,Schema\PreReceiveEnvironment> */
    public function listPreReceiveEnvironmentsListing(int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveEnvironmentsListing()->call($perPage, $page, $direction, $sort);
    }

    public function createPreReceiveEnvironment(array $params): PreReceiveEnvironment
    {
        return $this->operators->enterpriseAdmin👷CreatePreReceiveEnvironment()->call($params);
    }

    public function getPreReceiveEnvironment(int $preReceiveEnvironmentId): PreReceiveEnvironment
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    public function deletePreReceiveEnvironment(int $preReceiveEnvironmentId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeletePreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    public function updatePreReceiveEnvironment(int $preReceiveEnvironmentId, array $params): PreReceiveEnvironment
    {
        return $this->operators->enterpriseAdmin👷UpdatePreReceiveEnvironment()->call($preReceiveEnvironmentId, $params);
    }

    public function startPreReceiveEnvironmentDownload(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus
    {
        return $this->operators->enterpriseAdmin👷StartPreReceiveEnvironmentDownload()->call($preReceiveEnvironmentId);
    }

    public function startPreReceiveEnvironmentDownloadStreaming(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus
    {
        return $this->operators->enterpriseAdmin👷StartPreReceiveEnvironmentDownloadStreaming()->call($preReceiveEnvironmentId);
    }

    public function getDownloadStatusForPreReceiveEnvironment(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus
    {
        return $this->operators->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    public function getDownloadStatusForPreReceiveEnvironmentStreaming(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus
    {
        return $this->operators->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironmentStreaming()->call($preReceiveEnvironmentId);
    }

    /** @return iterable<int,Schema\PreReceiveHook> */
    public function listPreReceiveHooks(int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooks()->call($perPage, $page, $direction, $sort);
    }

    /** @return iterable<int,Schema\PreReceiveHook> */
    public function listPreReceiveHooksListing(int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooksListing()->call($perPage, $page, $direction, $sort);
    }

    public function createPreReceiveHook(array $params): PreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷CreatePreReceiveHook()->call($params);
    }

    public function getPreReceiveHook(int $preReceiveHookId): PreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveHook()->call($preReceiveHookId);
    }

    public function deletePreReceiveHook(int $preReceiveHookId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeletePreReceiveHook()->call($preReceiveHookId);
    }

    public function updatePreReceiveHook(int $preReceiveHookId, array $params): PreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷UpdatePreReceiveHook()->call($preReceiveHookId, $params);
    }

    /** @return iterable<int,Schema\Authorization> */
    public function listPersonalAccessTokens(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPersonalAccessTokens()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\Authorization> */
    public function listPersonalAccessTokensListing(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPersonalAccessTokensListing()->call($perPage, $page);
    }

    public function deletePersonalAccessToken(int $tokenId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeletePersonalAccessToken()->call($tokenId);
    }

    public function createUser(array $params): SimpleUser
    {
        return $this->operators->enterpriseAdmin👷CreateUser()->call($params);
    }

    public function deleteUser(string $username): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteUser()->call($username);
    }

    public function updateUsernameForUser(string $username, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\UpdateUsernameForUser\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->enterpriseAdmin👷UpdateUsernameForUser()->call($username, $params);
    }

    public function createImpersonationOAuthToken(string $username, array $params): Authorization
    {
        return $this->operators->enterpriseAdmin👷CreateImpersonationOAuthToken()->call($username, $params);
    }

    public function deleteImpersonationOAuthToken(string $username): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteImpersonationOAuthToken()->call($username);
    }

    public function getAnnouncement(): Announcement
    {
        return $this->operators->enterpriseAdmin👷GetAnnouncement()->call();
    }

    public function removeAnnouncement(): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷RemoveAnnouncement()->call();
    }

    public function setAnnouncement(array $params): Announcement
    {
        return $this->operators->enterpriseAdmin👷SetAnnouncement()->call($params);
    }

    public function getLicenseInformation(): LicenseInfo
    {
        return $this->operators->enterpriseAdmin👷GetLicenseInformation()->call();
    }

    public function getAllStats(): EnterpriseOverview
    {
        return $this->operators->enterpriseAdmin👷GetAllStats()->call();
    }

    public function getCommentStats(): EnterpriseCommentOverview
    {
        return $this->operators->enterpriseAdmin👷GetCommentStats()->call();
    }

    public function getGistStats(): EnterpriseGistOverview
    {
        return $this->operators->enterpriseAdmin👷GetGistStats()->call();
    }

    public function getHooksStats(): EnterpriseHookOverview
    {
        return $this->operators->enterpriseAdmin👷GetHooksStats()->call();
    }

    public function getIssueStats(): EnterpriseIssueOverview
    {
        return $this->operators->enterpriseAdmin👷GetIssueStats()->call();
    }

    public function getMilestoneStats(): EnterpriseMilestoneOverview
    {
        return $this->operators->enterpriseAdmin👷GetMilestoneStats()->call();
    }

    public function getOrgStats(): EnterpriseOrganizationOverview
    {
        return $this->operators->enterpriseAdmin👷GetOrgStats()->call();
    }

    public function getPagesStats(): EnterprisePageOverview
    {
        return $this->operators->enterpriseAdmin👷GetPagesStats()->call();
    }

    public function getPullRequestStats(): EnterprisePullRequestOverview
    {
        return $this->operators->enterpriseAdmin👷GetPullRequestStats()->call();
    }

    public function getRepoStats(): EnterpriseRepositoryOverview
    {
        return $this->operators->enterpriseAdmin👷GetRepoStats()->call();
    }

    public function getSecurityProducts(): EnterpriseSecurityProductsOverview
    {
        return $this->operators->enterpriseAdmin👷GetSecurityProducts()->call();
    }

    public function getUserStats(): EnterpriseUserOverview
    {
        return $this->operators->enterpriseAdmin👷GetUserStats()->call();
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

    public function listSelfHostedRunnerGroupsForEnterprise(string $enterprise, string $visibleToOrganization, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok
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

    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\Response\ApplicationJson\Ok\Application\Json
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

    public function listSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok
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

    public function listSelfHostedRunnersForEnterprise(string $name, string $enterprise, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok
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

    public function listLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListLabelsForSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    public function setCustomLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷SetCustomLabelsForSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $params);
    }

    public function addCustomLabelsToSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷AddCustomLabelsToSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $params);
    }

    public function removeAllCustomLabelsFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->enterpriseAdmin👷RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    public function removeCustomLabelFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, string $name): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
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

    /** @return iterable<int,Schema\GhesGetSsh>|WithoutBody */
    public function getManageSsh(): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetManageSsh()->call();
    }

    /** @return iterable<int,Schema\GhesSetSshResponse>|WithoutBody */
    public function setManageSsh(array $params): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetManageSsh()->call($params);
    }

    /** @return iterable<int,Schema\GhesDeleteSshResponse>|WithoutBody */
    public function deleteManageSsh(array $params): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteManageSsh()->call($params);
    }

    public function getChecksSystemRequirements(): GhesChecksSystemRequirements|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetChecksSystemRequirements()->call();
    }

    public function getClusterStatus(): GhesClusterStatus|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetClusterStatus()->call();
    }

    public function getManageConfigApplyStatus(string $runId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\GetManageConfigApplyStatus\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetManageConfigApplyStatus()->call($runId);
    }

    public function postManageRunConfigApply(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷PostManageRunConfigApply()->call($params);
    }

    public function getManageConfigApplyEvents(string $lastRequestId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\GetManageConfigApplyEvents\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetManageConfigApplyEvents()->call($lastRequestId);
    }

    public function initializeInstanceConfiguration(array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷InitializeInstanceConfiguration()->call($params);
    }

    public function licenseInfo(): GhesLicenseInfo|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷LicenseInfo()->call();
    }

    public function licenseUpload(bool $apply, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷LicenseUpload()->call($apply, $params);
    }

    public function licenseCheck(): GhesLicenseCheck|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷LicenseCheck()->call();
    }

    public function getConfigNodes(string $uuid, string $clusterRoles): GhesConfigNodes|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetConfigNodes()->call($uuid, $clusterRoles);
    }

    public function getManageSettings(): GhesGetSettings|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetManageSettings()->call();
    }

    public function setManageSettings(array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetManageSettings()->call($params);
    }

    /** @return iterable<int,Schema\GhesGetMaintenance>|WithoutBody */
    public function getManageMaintenance(string $uuid, string $clusterRoles): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetManageMaintenance()->call($uuid, $clusterRoles);
    }

    /** @return iterable<int,Schema\GhesSetMaintenanceResponse>|WithoutBody */
    public function setManageMaintenance(array $params): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetManageMaintenance()->call($params);
    }

    public function getReplicationStatus(string $uuid, string $clusterRoles): GhesReplicationStatus|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetReplicationStatus()->call($uuid, $clusterRoles);
    }

    /** @return iterable<int,Schema\GhesVersion>|WithoutBody */
    public function getVersion(string $uuid, string $clusterRoles): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetVersion()->call($uuid, $clusterRoles);
    }

    /** @return iterable<int,Schema\OrgPreReceiveHook> */
    public function listPreReceiveHooksForOrg(string $org, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooksForOrg()->call($org, $perPage, $page, $direction, $sort);
    }

    /** @return iterable<int,Schema\OrgPreReceiveHook> */
    public function listPreReceiveHooksForOrgListing(string $org, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooksForOrgListing()->call($org, $perPage, $page, $direction, $sort);
    }

    public function getPreReceiveHookForOrg(string $org, int $preReceiveHookId): OrgPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveHookForOrg()->call($org, $preReceiveHookId);
    }

    public function removePreReceiveHookEnforcementForOrg(string $org, int $preReceiveHookId): OrgPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷RemovePreReceiveHookEnforcementForOrg()->call($org, $preReceiveHookId);
    }

    public function updatePreReceiveHookEnforcementForOrg(string $org, int $preReceiveHookId, array $params): OrgPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷UpdatePreReceiveHookEnforcementForOrg()->call($org, $preReceiveHookId, $params);
    }

    /** @return iterable<int,Schema\RepositoryPreReceiveHook> */
    public function listPreReceiveHooksForRepo(string $owner, string $repo, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooksForRepo()->call($owner, $repo, $perPage, $page, $direction, $sort);
    }

    /** @return iterable<int,Schema\RepositoryPreReceiveHook> */
    public function listPreReceiveHooksForRepoListing(string $owner, string $repo, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooksForRepoListing()->call($owner, $repo, $perPage, $page, $direction, $sort);
    }

    public function getPreReceiveHookForRepo(string $owner, string $repo, int $preReceiveHookId): RepositoryPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveHookForRepo()->call($owner, $repo, $preReceiveHookId);
    }

    public function removePreReceiveHookEnforcementForRepo(string $owner, string $repo, int $preReceiveHookId): RepositoryPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷RemovePreReceiveHookEnforcementForRepo()->call($owner, $repo, $preReceiveHookId);
    }

    public function updatePreReceiveHookEnforcementForRepo(string $owner, string $repo, int $preReceiveHookId, array $params): RepositoryPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷UpdatePreReceiveHookEnforcementForRepo()->call($owner, $repo, $preReceiveHookId, $params);
    }

    public function listProvisionedGroupsEnterprise(string $filter, string $excludedAttributes, string $enterprise, int $startIndex, int $count): ScimEnterpriseGroupList|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ListProvisionedGroupsEnterprise()->call($filter, $excludedAttributes, $enterprise, $startIndex, $count);
    }

    public function provisionEnterpriseGroup(string $enterprise, array $params): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ProvisionEnterpriseGroup()->call($enterprise, $params);
    }

    public function getProvisioningInformationForEnterpriseGroup(string $scimGroupId, string $excludedAttributes, string $enterprise): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetProvisioningInformationForEnterpriseGroup()->call($scimGroupId, $excludedAttributes, $enterprise);
    }

    public function setInformationForProvisionedEnterpriseGroup(string $scimGroupId, string $enterprise, array $params): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetInformationForProvisionedEnterpriseGroup()->call($scimGroupId, $enterprise, $params);
    }

    public function deleteScimGroupFromEnterprise(string $scimGroupId, string $enterprise): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteScimGroupFromEnterprise()->call($scimGroupId, $enterprise);
    }

    public function updateAttributeForEnterpriseGroup(string $scimGroupId, string $enterprise, array $params): GroupResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷UpdateAttributeForEnterpriseGroup()->call($scimGroupId, $enterprise, $params);
    }

    public function listProvisionedIdentitiesEnterprise(string $filter, string $enterprise, int $startIndex, int $count): ScimEnterpriseUserList|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ListProvisionedIdentitiesEnterprise()->call($filter, $enterprise, $startIndex, $count);
    }

    public function provisionEnterpriseUser(string $enterprise, array $params): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷ProvisionEnterpriseUser()->call($enterprise, $params);
    }

    public function getProvisioningInformationForEnterpriseUser(string $scimUserId, string $enterprise): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetProvisioningInformationForEnterpriseUser()->call($scimUserId, $enterprise);
    }

    public function setInformationForProvisionedEnterpriseUser(string $scimUserId, string $enterprise, array $params): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetInformationForProvisionedEnterpriseUser()->call($scimUserId, $enterprise, $params);
    }

    public function deleteUserFromEnterprise(string $scimUserId, string $enterprise): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteUserFromEnterprise()->call($scimUserId, $enterprise);
    }

    public function updateAttributeForEnterpriseUser(string $scimUserId, string $enterprise, array $params): UserResponse|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷UpdateAttributeForEnterpriseUser()->call($scimUserId, $enterprise, $params);
    }

    public function getConfigurationStatus(): ConfigurationStatus|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetConfigurationStatus()->call();
    }

    public function startConfigurationProcess(): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷StartConfigurationProcess()->call();
    }

    public function getMaintenanceStatus(): MaintenanceStatus|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetMaintenanceStatus()->call();
    }

    public function enableOrDisableMaintenanceMode(array $params): MaintenanceStatus|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷EnableOrDisableMaintenanceMode()->call($params);
    }

    public function getSettings(): EnterpriseSettings|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetSettings()->call();
    }

    public function setSettings(array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetSettings()->call($params);
    }

    /** @return iterable<int,Schema\SshKey>|WithoutBody */
    public function getAllAuthorizedSshKeys(): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetAllAuthorizedSshKeys()->call();
    }

    /** @return iterable<int,Schema\SshKey>|WithoutBody */
    public function addAuthorizedSshKey(array $params): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷AddAuthorizedSshKey()->call($params);
    }

    /** @return iterable<int,Schema\SshKey>|WithoutBody */
    public function removeAuthorizedSshKey(array $params): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷RemoveAuthorizedSshKey()->call($params);
    }

    public function createEnterpriseServerLicense(array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷CreateEnterpriseServerLicense()->call($params);
    }

    public function upgradeLicense(array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷UpgradeLicense()->call($params);
    }

    public function promoteUserToBeSiteAdministrator(string $username): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷PromoteUserToBeSiteAdministrator()->call($username);
    }

    public function demoteSiteAdministrator(string $username): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DemoteSiteAdministrator()->call($username);
    }

    public function suspendUser(string $username, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SuspendUser()->call($username, $params);
    }

    public function unsuspendUser(string $username, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷UnsuspendUser()->call($username, $params);
    }
}
