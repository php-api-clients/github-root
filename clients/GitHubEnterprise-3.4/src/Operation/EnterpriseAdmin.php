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
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook2;
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
use ApiClients\Client\GitHubEnterprise\Schema\SelectedActions;
use ApiClients\Client\GitHubEnterprise\Schema\SimpleUser;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class EnterpriseAdmin
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\GlobalHook> */
    public function listGlobalWebhooks(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListGlobalWebhooks()->call($perPage, $page);
    }

    /** @return Observable<Schema\GlobalHook> */
    public function listGlobalWebhooksListing(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListGlobalWebhooksListing()->call($perPage, $page);
    }

    /** @return */
    public function createGlobalWebhook(array $params): GlobalHook
    {
        return $this->operators->enterpriseAdmin👷CreateGlobalWebhook()->call($params);
    }

    /** @return */
    public function getGlobalWebhook(int $hookId): GlobalHook
    {
        return $this->operators->enterpriseAdmin👷GetGlobalWebhook()->call($hookId);
    }

    /** @return */
    public function deleteGlobalWebhook(int $hookId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteGlobalWebhook()->call($hookId);
    }

    /** @return */
    public function updateGlobalWebhook(int $hookId, array $params): GlobalHook2
    {
        return $this->operators->enterpriseAdmin👷UpdateGlobalWebhook()->call($hookId, $params);
    }

    /** @return */
    public function pingGlobalWebhook(int $hookId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷PingGlobalWebhook()->call($hookId);
    }

    /** @return Observable<Schema\PublicKeyFull> */
    public function listPublicKeys(string $since, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPublicKeys()->call($since, $perPage, $page, $direction, $sort);
    }

    /** @return Observable<Schema\PublicKeyFull> */
    public function listPublicKeysListing(string $since, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPublicKeysListing()->call($since, $perPage, $page, $direction, $sort);
    }

    /** @return */
    public function deletePublicKey(string $keyIds): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeletePublicKey()->call($keyIds);
    }

    /** @return */
    public function updateLdapMappingForTeam(int $teamId, array $params): LdapMappingTeam
    {
        return $this->operators->enterpriseAdmin👷UpdateLdapMappingForTeam()->call($teamId, $params);
    }

    /** @return */
    public function syncLdapMappingForTeam(int $teamId): Created
    {
        return $this->operators->enterpriseAdmin👷SyncLdapMappingForTeam()->call($teamId);
    }

    /** @return */
    public function updateLdapMappingForUser(string $username, array $params): LdapMappingUser
    {
        return $this->operators->enterpriseAdmin👷UpdateLdapMappingForUser()->call($username, $params);
    }

    /** @return */
    public function syncLdapMappingForUser(string $username): Json
    {
        return $this->operators->enterpriseAdmin👷SyncLdapMappingForUser()->call($username);
    }

    /** @return */
    public function createOrg(array $params): OrganizationSimple
    {
        return $this->operators->enterpriseAdmin👷CreateOrg()->call($params);
    }

    /** @return */
    public function updateOrgName(string $org, array $params): Accepted
    {
        return $this->operators->enterpriseAdmin👷UpdateOrgName()->call($org, $params);
    }

    /** @return Observable<Schema\PreReceiveEnvironment> */
    public function listPreReceiveEnvironments(int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveEnvironments()->call($perPage, $page, $direction, $sort);
    }

    /** @return Observable<Schema\PreReceiveEnvironment> */
    public function listPreReceiveEnvironmentsListing(int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveEnvironmentsListing()->call($perPage, $page, $direction, $sort);
    }

    /** @return */
    public function createPreReceiveEnvironment(array $params): PreReceiveEnvironment
    {
        return $this->operators->enterpriseAdmin👷CreatePreReceiveEnvironment()->call($params);
    }

    /** @return */
    public function getPreReceiveEnvironment(int $preReceiveEnvironmentId): PreReceiveEnvironment
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    /** @return */
    public function deletePreReceiveEnvironment(int $preReceiveEnvironmentId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeletePreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    /** @return */
    public function updatePreReceiveEnvironment(int $preReceiveEnvironmentId, array $params): PreReceiveEnvironment
    {
        return $this->operators->enterpriseAdmin👷UpdatePreReceiveEnvironment()->call($preReceiveEnvironmentId, $params);
    }

    /** @return */
    public function startPreReceiveEnvironmentDownload(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus
    {
        return $this->operators->enterpriseAdmin👷StartPreReceiveEnvironmentDownload()->call($preReceiveEnvironmentId);
    }

    /** @return */
    public function startPreReceiveEnvironmentDownloadStreaming(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus
    {
        return $this->operators->enterpriseAdmin👷StartPreReceiveEnvironmentDownloadStreaming()->call($preReceiveEnvironmentId);
    }

    /** @return */
    public function getDownloadStatusForPreReceiveEnvironment(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus
    {
        return $this->operators->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    /** @return */
    public function getDownloadStatusForPreReceiveEnvironmentStreaming(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus
    {
        return $this->operators->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironmentStreaming()->call($preReceiveEnvironmentId);
    }

    /** @return Observable<Schema\PreReceiveHook> */
    public function listPreReceiveHooks(int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooks()->call($perPage, $page, $direction, $sort);
    }

    /** @return Observable<Schema\PreReceiveHook> */
    public function listPreReceiveHooksListing(int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooksListing()->call($perPage, $page, $direction, $sort);
    }

    /** @return */
    public function createPreReceiveHook(array $params): PreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷CreatePreReceiveHook()->call($params);
    }

    /** @return */
    public function getPreReceiveHook(int $preReceiveHookId): PreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveHook()->call($preReceiveHookId);
    }

    /** @return */
    public function deletePreReceiveHook(int $preReceiveHookId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeletePreReceiveHook()->call($preReceiveHookId);
    }

    /** @return */
    public function updatePreReceiveHook(int $preReceiveHookId, array $params): PreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷UpdatePreReceiveHook()->call($preReceiveHookId, $params);
    }

    /** @return Observable<Schema\Authorization> */
    public function listPersonalAccessTokens(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPersonalAccessTokens()->call($perPage, $page);
    }

    /** @return Observable<Schema\Authorization> */
    public function listPersonalAccessTokensListing(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPersonalAccessTokensListing()->call($perPage, $page);
    }

    /** @return */
    public function deletePersonalAccessToken(int $tokenId): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeletePersonalAccessToken()->call($tokenId);
    }

    /** @return */
    public function createUser(array $params): SimpleUser
    {
        return $this->operators->enterpriseAdmin👷CreateUser()->call($params);
    }

    /** @return */
    public function deleteUser(string $username): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteUser()->call($username);
    }

    /** @return */
    public function updateUsernameForUser(string $username, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\UpdateUsernameForUser\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->enterpriseAdmin👷UpdateUsernameForUser()->call($username, $params);
    }

    /** @return */
    public function createImpersonationOAuthToken(string $username, array $params): Authorization
    {
        return $this->operators->enterpriseAdmin👷CreateImpersonationOAuthToken()->call($username, $params);
    }

    /** @return */
    public function deleteImpersonationOAuthToken(string $username): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteImpersonationOAuthToken()->call($username);
    }

    /** @return */
    public function getAnnouncement(): Announcement
    {
        return $this->operators->enterpriseAdmin👷GetAnnouncement()->call();
    }

    /** @return */
    public function removeAnnouncement(): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷RemoveAnnouncement()->call();
    }

    /** @return */
    public function setAnnouncement(array $params): Announcement
    {
        return $this->operators->enterpriseAdmin👷SetAnnouncement()->call($params);
    }

    /** @return */
    public function getLicenseInformation(): LicenseInfo
    {
        return $this->operators->enterpriseAdmin👷GetLicenseInformation()->call();
    }

    /** @return */
    public function getAllStats(): EnterpriseOverview
    {
        return $this->operators->enterpriseAdmin👷GetAllStats()->call();
    }

    /** @return */
    public function getCommentStats(): EnterpriseCommentOverview
    {
        return $this->operators->enterpriseAdmin👷GetCommentStats()->call();
    }

    /** @return */
    public function getGistStats(): EnterpriseGistOverview
    {
        return $this->operators->enterpriseAdmin👷GetGistStats()->call();
    }

    /** @return */
    public function getHooksStats(): EnterpriseHookOverview
    {
        return $this->operators->enterpriseAdmin👷GetHooksStats()->call();
    }

    /** @return */
    public function getIssueStats(): EnterpriseIssueOverview
    {
        return $this->operators->enterpriseAdmin👷GetIssueStats()->call();
    }

    /** @return */
    public function getMilestoneStats(): EnterpriseMilestoneOverview
    {
        return $this->operators->enterpriseAdmin👷GetMilestoneStats()->call();
    }

    /** @return */
    public function getOrgStats(): EnterpriseOrganizationOverview
    {
        return $this->operators->enterpriseAdmin👷GetOrgStats()->call();
    }

    /** @return */
    public function getPagesStats(): EnterprisePageOverview
    {
        return $this->operators->enterpriseAdmin👷GetPagesStats()->call();
    }

    /** @return */
    public function getPullRequestStats(): EnterprisePullRequestOverview
    {
        return $this->operators->enterpriseAdmin👷GetPullRequestStats()->call();
    }

    /** @return */
    public function getRepoStats(): EnterpriseRepositoryOverview
    {
        return $this->operators->enterpriseAdmin👷GetRepoStats()->call();
    }

    /** @return */
    public function getUserStats(): EnterpriseUserOverview
    {
        return $this->operators->enterpriseAdmin👷GetUserStats()->call();
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
    public function listSelfHostedRunnerGroupsForEnterprise(string $enterprise, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnerGroupsForEnterprise()->call($enterprise, $perPage, $page);
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
    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\Response\ApplicationJson\Ok\Application\Json
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
    public function listSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok
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
    public function listSelfHostedRunnersForEnterprise(string $enterprise, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnersForEnterprise()->call($enterprise, $perPage, $page);
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
    public function listLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListLabelsForSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    /** @return */
    public function setCustomLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷SetCustomLabelsForSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $params);
    }

    /** @return */
    public function addCustomLabelsToSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷AddCustomLabelsToSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $params);
    }

    /** @return */
    public function removeAllCustomLabelsFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->enterpriseAdmin👷RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    /** @return */
    public function removeCustomLabelFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, string $name): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
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

    /** @return Observable<Schema\OrgPreReceiveHook> */
    public function listPreReceiveHooksForOrg(string $org, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooksForOrg()->call($org, $perPage, $page, $direction, $sort);
    }

    /** @return Observable<Schema\OrgPreReceiveHook> */
    public function listPreReceiveHooksForOrgListing(string $org, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooksForOrgListing()->call($org, $perPage, $page, $direction, $sort);
    }

    /** @return */
    public function getPreReceiveHookForOrg(string $org, int $preReceiveHookId): OrgPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveHookForOrg()->call($org, $preReceiveHookId);
    }

    /** @return */
    public function removePreReceiveHookEnforcementForOrg(string $org, int $preReceiveHookId): OrgPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷RemovePreReceiveHookEnforcementForOrg()->call($org, $preReceiveHookId);
    }

    /** @return */
    public function updatePreReceiveHookEnforcementForOrg(string $org, int $preReceiveHookId, array $params): OrgPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷UpdatePreReceiveHookEnforcementForOrg()->call($org, $preReceiveHookId, $params);
    }

    /** @return Observable<Schema\RepositoryPreReceiveHook> */
    public function listPreReceiveHooksForRepo(string $owner, string $repo, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooksForRepo()->call($owner, $repo, $perPage, $page, $direction, $sort);
    }

    /** @return Observable<Schema\RepositoryPreReceiveHook> */
    public function listPreReceiveHooksForRepoListing(string $owner, string $repo, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveHooksForRepoListing()->call($owner, $repo, $perPage, $page, $direction, $sort);
    }

    /** @return */
    public function getPreReceiveHookForRepo(string $owner, string $repo, int $preReceiveHookId): RepositoryPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveHookForRepo()->call($owner, $repo, $preReceiveHookId);
    }

    /** @return */
    public function removePreReceiveHookEnforcementForRepo(string $owner, string $repo, int $preReceiveHookId): RepositoryPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷RemovePreReceiveHookEnforcementForRepo()->call($owner, $repo, $preReceiveHookId);
    }

    /** @return */
    public function updatePreReceiveHookEnforcementForRepo(string $owner, string $repo, int $preReceiveHookId, array $params): RepositoryPreReceiveHook
    {
        return $this->operators->enterpriseAdmin👷UpdatePreReceiveHookEnforcementForRepo()->call($owner, $repo, $preReceiveHookId, $params);
    }

    /** @return */
    public function getConfigurationStatus(): ConfigurationStatus|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetConfigurationStatus()->call();
    }

    /** @return */
    public function startConfigurationProcess(): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷StartConfigurationProcess()->call();
    }

    /** @return */
    public function getMaintenanceStatus(): MaintenanceStatus|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetMaintenanceStatus()->call();
    }

    /** @return */
    public function enableOrDisableMaintenanceMode(array $params): MaintenanceStatus|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷EnableOrDisableMaintenanceMode()->call($params);
    }

    /** @return */
    public function getSettings(): EnterpriseSettings|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetSettings()->call();
    }

    /** @return */
    public function setSettings(array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SetSettings()->call($params);
    }

    /** @return Observable<Schema\SshKey>|WithoutBody */
    public function getAllAuthorizedSshKeys(): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷GetAllAuthorizedSshKeys()->call();
    }

    /** @return Observable<Schema\SshKey>|WithoutBody */
    public function addAuthorizedSshKey(array $params): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷AddAuthorizedSshKey()->call($params);
    }

    /** @return Observable<Schema\SshKey>|WithoutBody */
    public function removeAuthorizedSshKey(array $params): iterable|WithoutBody
    {
        return $this->operators->enterpriseAdmin👷RemoveAuthorizedSshKey()->call($params);
    }

    /** @return */
    public function createEnterpriseServerLicense(array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷CreateEnterpriseServerLicense()->call($params);
    }

    /** @return */
    public function upgradeLicense(array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷UpgradeLicense()->call($params);
    }

    /** @return */
    public function promoteUserToBeSiteAdministrator(string $username): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷PromoteUserToBeSiteAdministrator()->call($username);
    }

    /** @return */
    public function demoteSiteAdministrator(string $username): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DemoteSiteAdministrator()->call($username);
    }

    /** @return */
    public function suspendUser(string $username, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷SuspendUser()->call($username, $params);
    }

    /** @return */
    public function unsuspendUser(string $username, array $params): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷UnsuspendUser()->call($username, $params);
    }
}
