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
    public function createGlobalWebhook(array $params): GlobalHook|array
    {
        return $this->operators->enterpriseAdmin👷CreateGlobalWebhook()->call($params);
    }

    /** @return Schema\GlobalHook */
    public function getGlobalWebhook(int $hookId): GlobalHook|array
    {
        return $this->operators->enterpriseAdmin👷GetGlobalWebhook()->call($hookId);
    }

    /** @return array{code:int} */
    public function deleteGlobalWebhook(int $hookId): array
    {
        return $this->operators->enterpriseAdmin👷DeleteGlobalWebhook()->call($hookId);
    }

    /** @return Schema\GlobalHook2 */
    public function updateGlobalWebhook(int $hookId, array $params): GlobalHook2|array
    {
        return $this->operators->enterpriseAdmin👷UpdateGlobalWebhook()->call($hookId, $params);
    }

    /** @return array{code:int} */
    public function pingGlobalWebhook(int $hookId): array
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

    /** @return array{code:int} */
    public function deletePublicKey(string $keyIds): array
    {
        return $this->operators->enterpriseAdmin👷DeletePublicKey()->call($keyIds);
    }

    /** @return */
    public function updateLdapMappingForTeam(int $teamId, array $params): LdapMappingTeam|array
    {
        return $this->operators->enterpriseAdmin👷UpdateLdapMappingForTeam()->call($teamId, $params);
    }

    /** @return */
    public function syncLdapMappingForTeam(int $teamId): Created|array
    {
        return $this->operators->enterpriseAdmin👷SyncLdapMappingForTeam()->call($teamId);
    }

    /** @return */
    public function updateLdapMappingForUser(string $username, array $params): LdapMappingUser|array
    {
        return $this->operators->enterpriseAdmin👷UpdateLdapMappingForUser()->call($username, $params);
    }

    /** @return */
    public function syncLdapMappingForUser(string $username): Json|array
    {
        return $this->operators->enterpriseAdmin👷SyncLdapMappingForUser()->call($username);
    }

    /** @return */
    public function createOrg(array $params): OrganizationSimple|array
    {
        return $this->operators->enterpriseAdmin👷CreateOrg()->call($params);
    }

    /** @return */
    public function updateOrgName(string $org, array $params): Accepted|array
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
    public function createPreReceiveEnvironment(array $params): PreReceiveEnvironment|array
    {
        return $this->operators->enterpriseAdmin👷CreatePreReceiveEnvironment()->call($params);
    }

    /** @return */
    public function getPreReceiveEnvironment(int $preReceiveEnvironmentId): PreReceiveEnvironment|array
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    /** @return array{code:int} */
    public function deletePreReceiveEnvironment(int $preReceiveEnvironmentId): array
    {
        return $this->operators->enterpriseAdmin👷DeletePreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    /** @return */
    public function updatePreReceiveEnvironment(int $preReceiveEnvironmentId, array $params): PreReceiveEnvironment|array
    {
        return $this->operators->enterpriseAdmin👷UpdatePreReceiveEnvironment()->call($preReceiveEnvironmentId, $params);
    }

    /** @return */
    public function startPreReceiveEnvironmentDownload(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus|array
    {
        return $this->operators->enterpriseAdmin👷StartPreReceiveEnvironmentDownload()->call($preReceiveEnvironmentId);
    }

    /** @return */
    public function startPreReceiveEnvironmentDownloadStreaming(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus|array
    {
        return $this->operators->enterpriseAdmin👷StartPreReceiveEnvironmentDownloadStreaming()->call($preReceiveEnvironmentId);
    }

    /** @return */
    public function getDownloadStatusForPreReceiveEnvironment(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus|array
    {
        return $this->operators->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    /** @return */
    public function getDownloadStatusForPreReceiveEnvironmentStreaming(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus|array
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
    public function createPreReceiveHook(array $params): PreReceiveHook|array
    {
        return $this->operators->enterpriseAdmin👷CreatePreReceiveHook()->call($params);
    }

    /** @return */
    public function getPreReceiveHook(int $preReceiveHookId): PreReceiveHook|array
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveHook()->call($preReceiveHookId);
    }

    /** @return array{code:int} */
    public function deletePreReceiveHook(int $preReceiveHookId): array
    {
        return $this->operators->enterpriseAdmin👷DeletePreReceiveHook()->call($preReceiveHookId);
    }

    /** @return */
    public function updatePreReceiveHook(int $preReceiveHookId, array $params): PreReceiveHook|array
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

    /** @return array{code:int} */
    public function deletePersonalAccessToken(int $tokenId): array
    {
        return $this->operators->enterpriseAdmin👷DeletePersonalAccessToken()->call($tokenId);
    }

    /** @return */
    public function createUser(array $params): SimpleUser|array
    {
        return $this->operators->enterpriseAdmin👷CreateUser()->call($params);
    }

    /** @return array{code:int} */
    public function deleteUser(string $username): array
    {
        return $this->operators->enterpriseAdmin👷DeleteUser()->call($username);
    }

    /** @return */
    public function updateUsernameForUser(string $username, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\UpdateUsernameForUser\Response\ApplicationJson\Accepted\Application\Json|array
    {
        return $this->operators->enterpriseAdmin👷UpdateUsernameForUser()->call($username, $params);
    }

    /** @return */
    public function createImpersonationOAuthToken(string $username, array $params): Authorization|array
    {
        return $this->operators->enterpriseAdmin👷CreateImpersonationOAuthToken()->call($username, $params);
    }

    /** @return array{code:int} */
    public function deleteImpersonationOAuthToken(string $username): array
    {
        return $this->operators->enterpriseAdmin👷DeleteImpersonationOAuthToken()->call($username);
    }

    /** @return */
    public function getAnnouncement(): Announcement|array
    {
        return $this->operators->enterpriseAdmin👷GetAnnouncement()->call();
    }

    /** @return array{code:int} */
    public function removeAnnouncement(): array
    {
        return $this->operators->enterpriseAdmin👷RemoveAnnouncement()->call();
    }

    /** @return */
    public function setAnnouncement(array $params): Announcement|array
    {
        return $this->operators->enterpriseAdmin👷SetAnnouncement()->call($params);
    }

    /** @return */
    public function getLicenseInformation(): LicenseInfo|array
    {
        return $this->operators->enterpriseAdmin👷GetLicenseInformation()->call();
    }

    /** @return */
    public function getAllStats(): EnterpriseOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetAllStats()->call();
    }

    /** @return */
    public function getCommentStats(): EnterpriseCommentOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetCommentStats()->call();
    }

    /** @return */
    public function getGistStats(): EnterpriseGistOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetGistStats()->call();
    }

    /** @return */
    public function getHooksStats(): EnterpriseHookOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetHooksStats()->call();
    }

    /** @return */
    public function getIssueStats(): EnterpriseIssueOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetIssueStats()->call();
    }

    /** @return */
    public function getMilestoneStats(): EnterpriseMilestoneOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetMilestoneStats()->call();
    }

    /** @return */
    public function getOrgStats(): EnterpriseOrganizationOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetOrgStats()->call();
    }

    /** @return */
    public function getPagesStats(): EnterprisePageOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetPagesStats()->call();
    }

    /** @return */
    public function getPullRequestStats(): EnterprisePullRequestOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetPullRequestStats()->call();
    }

    /** @return */
    public function getRepoStats(): EnterpriseRepositoryOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetRepoStats()->call();
    }

    /** @return */
    public function getUserStats(): EnterpriseUserOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetUserStats()->call();
    }

    /** @return */
    public function getGithubActionsPermissionsEnterprise(string $enterprise): ActionsEnterprisePermissions|array
    {
        return $this->operators->enterpriseAdmin👷GetGithubActionsPermissionsEnterprise()->call($enterprise);
    }

    /** @return array{code:int} */
    public function setGithubActionsPermissionsEnterprise(string $enterprise, array $params): array
    {
        return $this->operators->enterpriseAdmin👷SetGithubActionsPermissionsEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, int $perPage, int $page): Ok|array
    {
        return $this->operators->enterpriseAdmin👷ListSelectedOrganizationsEnabledGithubActionsEnterprise()->call($enterprise, $perPage, $page);
    }

    /** @return array{code:int} */
    public function setSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, array $params): array
    {
        return $this->operators->enterpriseAdmin👷SetSelectedOrganizationsEnabledGithubActionsEnterprise()->call($enterprise, $params);
    }

    /** @return array{code:int} */
    public function enableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): array
    {
        return $this->operators->enterpriseAdmin👷EnableSelectedOrganizationGithubActionsEnterprise()->call($enterprise, $orgId);
    }

    /** @return array{code:int} */
    public function disableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): array
    {
        return $this->operators->enterpriseAdmin👷DisableSelectedOrganizationGithubActionsEnterprise()->call($enterprise, $orgId);
    }

    /** @return */
    public function getAllowedActionsEnterprise(string $enterprise): SelectedActions|array
    {
        return $this->operators->enterpriseAdmin👷GetAllowedActionsEnterprise()->call($enterprise);
    }

    /** @return array{code:int} */
    public function setAllowedActionsEnterprise(string $enterprise, array $params): array
    {
        return $this->operators->enterpriseAdmin👷SetAllowedActionsEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function listSelfHostedRunnerGroupsForEnterprise(string $enterprise, string $visibleToOrganization, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnerGroupsForEnterprise()->call($enterprise, $visibleToOrganization, $perPage, $page);
    }

    /** @return */
    public function createSelfHostedRunnerGroupForEnterprise(string $enterprise, array $params): RunnerGroupsEnterprise|array
    {
        return $this->operators->enterpriseAdmin👷CreateSelfHostedRunnerGroupForEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function getSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId): RunnerGroupsEnterprise|array
    {
        return $this->operators->enterpriseAdmin👷GetSelfHostedRunnerGroupForEnterprise()->call($enterprise, $runnerGroupId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerGroupFromEnterprise(string $enterprise, int $runnerGroupId): array
    {
        return $this->operators->enterpriseAdmin👷DeleteSelfHostedRunnerGroupFromEnterprise()->call($enterprise, $runnerGroupId);
    }

    /** @return */
    public function updateSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): RunnerGroupsEnterprise|array
    {
        return $this->operators->enterpriseAdmin👷UpdateSelfHostedRunnerGroupForEnterprise()->call($enterprise, $runnerGroupId, $params);
    }

    /** @return */
    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->enterpriseAdmin👷ListOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $perPage, $page);
    }

    /** @return array{code:int} */
    public function setOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, array $params): array
    {
        return $this->operators->enterpriseAdmin👷SetOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $params);
    }

    /** @return array{code:int} */
    public function addOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $orgId): array
    {
        return $this->operators->enterpriseAdmin👷AddOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $orgId);
    }

    /** @return array{code:int} */
    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $orgId): array
    {
        return $this->operators->enterpriseAdmin👷RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise()->call($enterprise, $runnerGroupId, $orgId);
    }

    /** @return */
    public function listSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnersInGroupForEnterprise()->call($enterprise, $runnerGroupId, $perPage, $page);
    }

    /** @return array{code:int} */
    public function setSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): array
    {
        return $this->operators->enterpriseAdmin👷SetSelfHostedRunnersInGroupForEnterprise()->call($enterprise, $runnerGroupId, $params);
    }

    /** @return array{code:int} */
    public function addSelfHostedRunnerToGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): array
    {
        return $this->operators->enterpriseAdmin👷AddSelfHostedRunnerToGroupForEnterprise()->call($enterprise, $runnerGroupId, $runnerId);
    }

    /** @return array{code:int} */
    public function removeSelfHostedRunnerFromGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): array
    {
        return $this->operators->enterpriseAdmin👷RemoveSelfHostedRunnerFromGroupForEnterprise()->call($enterprise, $runnerGroupId, $runnerId);
    }

    /** @return */
    public function listSelfHostedRunnersForEnterprise(string $enterprise, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnersForEnterprise()->call($enterprise, $perPage, $page);
    }

    /** @return Observable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForEnterprise(string $enterprise): iterable
    {
        return $this->operators->enterpriseAdmin👷ListRunnerApplicationsForEnterprise()->call($enterprise);
    }

    /** @return */
    public function createRegistrationTokenForEnterprise(string $enterprise): AuthenticationToken|array
    {
        return $this->operators->enterpriseAdmin👷CreateRegistrationTokenForEnterprise()->call($enterprise);
    }

    /** @return */
    public function createRemoveTokenForEnterprise(string $enterprise): AuthenticationToken|array
    {
        return $this->operators->enterpriseAdmin👷CreateRemoveTokenForEnterprise()->call($enterprise);
    }

    /** @return */
    public function getSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): Runner|array
    {
        return $this->operators->enterpriseAdmin👷GetSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerFromEnterprise(string $enterprise, int $runnerId): array
    {
        return $this->operators->enterpriseAdmin👷DeleteSelfHostedRunnerFromEnterprise()->call($enterprise, $runnerId);
    }

    /** @return */
    public function listLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->enterpriseAdmin👷ListLabelsForSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    /** @return */
    public function setCustomLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->enterpriseAdmin👷SetCustomLabelsForSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $params);
    }

    /** @return */
    public function addCustomLabelsToSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->enterpriseAdmin👷AddCustomLabelsToSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId, $params);
    }

    /** @return */
    public function removeAllCustomLabelsFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->enterpriseAdmin👷RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    /** @return */
    public function removeCustomLabelFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, string $name): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
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
    public function getPreReceiveHookForOrg(string $org, int $preReceiveHookId): OrgPreReceiveHook|array
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveHookForOrg()->call($org, $preReceiveHookId);
    }

    /** @return */
    public function removePreReceiveHookEnforcementForOrg(string $org, int $preReceiveHookId): OrgPreReceiveHook|array
    {
        return $this->operators->enterpriseAdmin👷RemovePreReceiveHookEnforcementForOrg()->call($org, $preReceiveHookId);
    }

    /** @return */
    public function updatePreReceiveHookEnforcementForOrg(string $org, int $preReceiveHookId, array $params): OrgPreReceiveHook|array
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
    public function getPreReceiveHookForRepo(string $owner, string $repo, int $preReceiveHookId): RepositoryPreReceiveHook|array
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveHookForRepo()->call($owner, $repo, $preReceiveHookId);
    }

    /** @return */
    public function removePreReceiveHookEnforcementForRepo(string $owner, string $repo, int $preReceiveHookId): RepositoryPreReceiveHook|array
    {
        return $this->operators->enterpriseAdmin👷RemovePreReceiveHookEnforcementForRepo()->call($owner, $repo, $preReceiveHookId);
    }

    /** @return */
    public function updatePreReceiveHookEnforcementForRepo(string $owner, string $repo, int $preReceiveHookId, array $params): RepositoryPreReceiveHook|array
    {
        return $this->operators->enterpriseAdmin👷UpdatePreReceiveHookEnforcementForRepo()->call($owner, $repo, $preReceiveHookId, $params);
    }

    /** @return Schema\ScimEnterpriseGroupList|array{code:int} */
    public function listProvisionedGroupsEnterprise(string $filter, string $excludedAttributes, int $startIndex, int $count): ScimEnterpriseGroupList|array
    {
        return $this->operators->enterpriseAdmin👷ListProvisionedGroupsEnterprise()->call($filter, $excludedAttributes, $startIndex, $count);
    }

    /** @return Schema\GroupResponse|array{code:int} */
    public function provisionEnterpriseGroup(array $params): GroupResponse|array
    {
        return $this->operators->enterpriseAdmin👷ProvisionEnterpriseGroup()->call($params);
    }

    /** @return Schema\GroupResponse|array{code:int} */
    public function getProvisioningInformationForEnterpriseGroup(string $scimGroupId, string $excludedAttributes): GroupResponse|array
    {
        return $this->operators->enterpriseAdmin👷GetProvisioningInformationForEnterpriseGroup()->call($scimGroupId, $excludedAttributes);
    }

    /** @return Schema\GroupResponse|array{code:int} */
    public function setInformationForProvisionedEnterpriseGroup(string $scimGroupId, array $params): GroupResponse|array
    {
        return $this->operators->enterpriseAdmin👷SetInformationForProvisionedEnterpriseGroup()->call($scimGroupId, $params);
    }

    /** @return array{code:int} */
    public function deleteScimGroupFromEnterprise(string $scimGroupId): array
    {
        return $this->operators->enterpriseAdmin👷DeleteScimGroupFromEnterprise()->call($scimGroupId);
    }

    /** @return Schema\GroupResponse|array{code:int} */
    public function updateAttributeForEnterpriseGroup(string $scimGroupId, array $params): GroupResponse|array
    {
        return $this->operators->enterpriseAdmin👷UpdateAttributeForEnterpriseGroup()->call($scimGroupId, $params);
    }

    /** @return Schema\ScimEnterpriseUserList|array{code:int} */
    public function listProvisionedIdentitiesEnterprise(string $filter, int $startIndex, int $count): ScimEnterpriseUserList|array
    {
        return $this->operators->enterpriseAdmin👷ListProvisionedIdentitiesEnterprise()->call($filter, $startIndex, $count);
    }

    /** @return Schema\UserResponse|array{code:int} */
    public function provisionEnterpriseUser(array $params): UserResponse|array
    {
        return $this->operators->enterpriseAdmin👷ProvisionEnterpriseUser()->call($params);
    }

    /** @return Schema\UserResponse|array{code:int} */
    public function getProvisioningInformationForEnterpriseUser(string $scimUserId): UserResponse|array
    {
        return $this->operators->enterpriseAdmin👷GetProvisioningInformationForEnterpriseUser()->call($scimUserId);
    }

    /** @return Schema\UserResponse|array{code:int} */
    public function setInformationForProvisionedEnterpriseUser(string $scimUserId, array $params): UserResponse|array
    {
        return $this->operators->enterpriseAdmin👷SetInformationForProvisionedEnterpriseUser()->call($scimUserId, $params);
    }

    /** @return array{code:int} */
    public function deleteUserFromEnterprise(string $scimUserId): array
    {
        return $this->operators->enterpriseAdmin👷DeleteUserFromEnterprise()->call($scimUserId);
    }

    /** @return Schema\UserResponse|array{code:int} */
    public function updateAttributeForEnterpriseUser(string $scimUserId, array $params): UserResponse|array
    {
        return $this->operators->enterpriseAdmin👷UpdateAttributeForEnterpriseUser()->call($scimUserId, $params);
    }

    /** @return Schema\ConfigurationStatus|array{code:int} */
    public function getConfigurationStatus(): ConfigurationStatus|array
    {
        return $this->operators->enterpriseAdmin👷GetConfigurationStatus()->call();
    }

    /** @return array{code:int} */
    public function startConfigurationProcess(): array
    {
        return $this->operators->enterpriseAdmin👷StartConfigurationProcess()->call();
    }

    /** @return Schema\MaintenanceStatus|array{code:int} */
    public function getMaintenanceStatus(): MaintenanceStatus|array
    {
        return $this->operators->enterpriseAdmin👷GetMaintenanceStatus()->call();
    }

    /** @return Schema\MaintenanceStatus|array{code:int} */
    public function enableOrDisableMaintenanceMode(array $params): MaintenanceStatus|array
    {
        return $this->operators->enterpriseAdmin👷EnableOrDisableMaintenanceMode()->call($params);
    }

    /** @return Schema\EnterpriseSettings|array{code:int} */
    public function getSettings(): EnterpriseSettings|array
    {
        return $this->operators->enterpriseAdmin👷GetSettings()->call();
    }

    /** @return array{code:int} */
    public function setSettings(array $params): array
    {
        return $this->operators->enterpriseAdmin👷SetSettings()->call($params);
    }

    /** @return Observable<Schema\SshKey>|array{code:int} */
    public function getAllAuthorizedSshKeys(): iterable
    {
        return $this->operators->enterpriseAdmin👷GetAllAuthorizedSshKeys()->call();
    }

    /** @return Observable<Schema\SshKey>|array{code:int} */
    public function addAuthorizedSshKey(array $params): iterable
    {
        return $this->operators->enterpriseAdmin👷AddAuthorizedSshKey()->call($params);
    }

    /** @return Observable<Schema\SshKey>|array{code:int} */
    public function removeAuthorizedSshKey(array $params): iterable
    {
        return $this->operators->enterpriseAdmin👷RemoveAuthorizedSshKey()->call($params);
    }

    /** @return array{code:int} */
    public function createEnterpriseServerLicense(array $params): array
    {
        return $this->operators->enterpriseAdmin👷CreateEnterpriseServerLicense()->call($params);
    }

    /** @return array{code:int} */
    public function upgradeLicense(array $params): array
    {
        return $this->operators->enterpriseAdmin👷UpgradeLicense()->call($params);
    }

    /** @return array{code:int} */
    public function promoteUserToBeSiteAdministrator(string $username): array
    {
        return $this->operators->enterpriseAdmin👷PromoteUserToBeSiteAdministrator()->call($username);
    }

    /** @return array{code:int} */
    public function demoteSiteAdministrator(string $username): array
    {
        return $this->operators->enterpriseAdmin👷DemoteSiteAdministrator()->call($username);
    }

    /** @return array{code:int} */
    public function suspendUser(string $username, array $params): array
    {
        return $this->operators->enterpriseAdmin👷SuspendUser()->call($username, $params);
    }

    /** @return array{code:int} */
    public function unsuspendUser(string $username, array $params): array
    {
        return $this->operators->enterpriseAdmin👷UnsuspendUser()->call($username, $params);
    }
}
