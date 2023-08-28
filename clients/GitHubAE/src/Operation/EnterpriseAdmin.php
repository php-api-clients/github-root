<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubAE\Schema\Announcement;
use ApiClients\Client\GitHubAE\Schema\AuthenticationToken;
use ApiClients\Client\GitHubAE\Schema\Authorization;
use ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseOverview;
use ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview;
use ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview;
use ApiClients\Client\GitHubAE\Schema\GlobalHook;
use ApiClients\Client\GitHubAE\Schema\GlobalHook2;
use ApiClients\Client\GitHubAE\Schema\LicenseInfo;
use ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\UpdateOrgName\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubAE\Schema\OrganizationSimple;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubAE\Schema\Runner;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubAE\Schema\SelectedActions;

final class EnterpriseAdmin
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<Schema\GlobalHook> */
    public function listGlobalWebhooks(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListGlobalWebhooks()->call($perPage, $page);
    }

    /** @return iterable<Schema\GlobalHook> */
    public function listGlobalWebhooksListing(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListGlobalWebhooksListing()->call($perPage, $page);
    }

    /** @return Schema\GlobalHook */
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

    /** @return iterable<Schema\PublicKeyFull> */
    public function listPublicKeys(string $since, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPublicKeys()->call($since, $perPage, $page, $direction, $sort);
    }

    /** @return iterable<Schema\PublicKeyFull> */
    public function listPublicKeysListing(string $since, int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPublicKeysListing()->call($since, $perPage, $page, $direction, $sort);
    }

    /** @return array{code:int} */
    public function deletePublicKey(string $keyIds): array
    {
        return $this->operators->enterpriseAdmin👷DeletePublicKey()->call($keyIds);
    }

    /** @return Schema\OrganizationSimple */
    public function createOrg(array $params): OrganizationSimple|array
    {
        return $this->operators->enterpriseAdmin👷CreateOrg()->call($params);
    }

    /** @return Schema\Operations\EnterpriseAdmin\UpdateOrgName\Response\ApplicationJson\Accepted */
    public function updateOrgName(string $org, array $params): Accepted|array
    {
        return $this->operators->enterpriseAdmin👷UpdateOrgName()->call($org, $params);
    }

    /** @return iterable<Schema\PreReceiveEnvironment> */
    public function listPreReceiveEnvironments(int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveEnvironments()->call($perPage, $page, $direction, $sort);
    }

    /** @return iterable<Schema\PreReceiveEnvironment> */
    public function listPreReceiveEnvironmentsListing(int $perPage, int $page, string $direction, string $sort): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPreReceiveEnvironmentsListing()->call($perPage, $page, $direction, $sort);
    }

    /** @return Schema\PreReceiveEnvironment */
    public function createPreReceiveEnvironment(array $params): PreReceiveEnvironment|array
    {
        return $this->operators->enterpriseAdmin👷CreatePreReceiveEnvironment()->call($params);
    }

    /** @return Schema\PreReceiveEnvironment */
    public function getPreReceiveEnvironment(int $preReceiveEnvironmentId): PreReceiveEnvironment|array
    {
        return $this->operators->enterpriseAdmin👷GetPreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    /** @return array{code:int} */
    public function deletePreReceiveEnvironment(int $preReceiveEnvironmentId): array
    {
        return $this->operators->enterpriseAdmin👷DeletePreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    /** @return Schema\PreReceiveEnvironment */
    public function updatePreReceiveEnvironment(int $preReceiveEnvironmentId, array $params): PreReceiveEnvironment|array
    {
        return $this->operators->enterpriseAdmin👷UpdatePreReceiveEnvironment()->call($preReceiveEnvironmentId, $params);
    }

    /** @return Schema\PreReceiveEnvironmentDownloadStatus */
    public function startPreReceiveEnvironmentDownload(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus|array
    {
        return $this->operators->enterpriseAdmin👷StartPreReceiveEnvironmentDownload()->call($preReceiveEnvironmentId);
    }

    /** @return Schema\PreReceiveEnvironmentDownloadStatus */
    public function startPreReceiveEnvironmentDownloadStreaming(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus|array
    {
        return $this->operators->enterpriseAdmin👷StartPreReceiveEnvironmentDownloadStreaming()->call($preReceiveEnvironmentId);
    }

    /** @return Schema\PreReceiveEnvironmentDownloadStatus */
    public function getDownloadStatusForPreReceiveEnvironment(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus|array
    {
        return $this->operators->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironment()->call($preReceiveEnvironmentId);
    }

    /** @return Schema\PreReceiveEnvironmentDownloadStatus */
    public function getDownloadStatusForPreReceiveEnvironmentStreaming(int $preReceiveEnvironmentId): PreReceiveEnvironmentDownloadStatus|array
    {
        return $this->operators->enterpriseAdmin👷GetDownloadStatusForPreReceiveEnvironmentStreaming()->call($preReceiveEnvironmentId);
    }

    /** @return iterable<Schema\Authorization> */
    public function listPersonalAccessTokens(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPersonalAccessTokens()->call($perPage, $page);
    }

    /** @return iterable<Schema\Authorization> */
    public function listPersonalAccessTokensListing(int $perPage, int $page): iterable
    {
        return $this->operators->enterpriseAdmin👷ListPersonalAccessTokensListing()->call($perPage, $page);
    }

    /** @return array{code:int} */
    public function deletePersonalAccessToken(int $tokenId): array
    {
        return $this->operators->enterpriseAdmin👷DeletePersonalAccessToken()->call($tokenId);
    }

    /** @return array{code:int} */
    public function deleteUser(string $username): array
    {
        return $this->operators->enterpriseAdmin👷DeleteUser()->call($username);
    }

    /** @return Schema\Authorization */
    public function createImpersonationOAuthToken(string $username, array $params): Authorization|array
    {
        return $this->operators->enterpriseAdmin👷CreateImpersonationOAuthToken()->call($username, $params);
    }

    /** @return array{code:int} */
    public function deleteImpersonationOAuthToken(string $username): array
    {
        return $this->operators->enterpriseAdmin👷DeleteImpersonationOAuthToken()->call($username);
    }

    /** @return Schema\Announcement */
    public function getAnnouncement(): Announcement|array
    {
        return $this->operators->enterpriseAdmin👷GetAnnouncement()->call();
    }

    /** @return array{code:int} */
    public function removeAnnouncement(): array
    {
        return $this->operators->enterpriseAdmin👷RemoveAnnouncement()->call();
    }

    /** @return Schema\Announcement */
    public function setAnnouncement(array $params): Announcement|array
    {
        return $this->operators->enterpriseAdmin👷SetAnnouncement()->call($params);
    }

    /** @return Schema\LicenseInfo */
    public function getLicenseInformation(): LicenseInfo|array
    {
        return $this->operators->enterpriseAdmin👷GetLicenseInformation()->call();
    }

    /** @return Schema\EnterpriseOverview */
    public function getAllStats(): EnterpriseOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetAllStats()->call();
    }

    /** @return Schema\EnterpriseCommentOverview */
    public function getCommentStats(): EnterpriseCommentOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetCommentStats()->call();
    }

    /** @return Schema\EnterpriseGistOverview */
    public function getGistStats(): EnterpriseGistOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetGistStats()->call();
    }

    /** @return Schema\EnterpriseHookOverview */
    public function getHooksStats(): EnterpriseHookOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetHooksStats()->call();
    }

    /** @return Schema\EnterpriseIssueOverview */
    public function getIssueStats(): EnterpriseIssueOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetIssueStats()->call();
    }

    /** @return Schema\EnterpriseMilestoneOverview */
    public function getMilestoneStats(): EnterpriseMilestoneOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetMilestoneStats()->call();
    }

    /** @return Schema\EnterpriseOrganizationOverview */
    public function getOrgStats(): EnterpriseOrganizationOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetOrgStats()->call();
    }

    /** @return Schema\EnterprisePageOverview */
    public function getPagesStats(): EnterprisePageOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetPagesStats()->call();
    }

    /** @return Schema\EnterprisePullRequestOverview */
    public function getPullRequestStats(): EnterprisePullRequestOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetPullRequestStats()->call();
    }

    /** @return Schema\EnterpriseRepositoryOverview */
    public function getRepoStats(): EnterpriseRepositoryOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetRepoStats()->call();
    }

    /** @return Schema\EnterpriseUserOverview */
    public function getUserStats(): EnterpriseUserOverview|array
    {
        return $this->operators->enterpriseAdmin👷GetUserStats()->call();
    }

    /** @return Schema\ActionsEnterprisePermissions */
    public function getGithubActionsPermissionsEnterprise(string $enterprise): ActionsEnterprisePermissions|array
    {
        return $this->operators->enterpriseAdmin👷GetGithubActionsPermissionsEnterprise()->call($enterprise);
    }

    /** @return array{code:int} */
    public function setGithubActionsPermissionsEnterprise(string $enterprise, array $params): array
    {
        return $this->operators->enterpriseAdmin👷SetGithubActionsPermissionsEnterprise()->call($enterprise, $params);
    }

    /** @return Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok */
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

    /** @return Schema\SelectedActions */
    public function getAllowedActionsEnterprise(string $enterprise): SelectedActions|array
    {
        return $this->operators->enterpriseAdmin👷GetAllowedActionsEnterprise()->call($enterprise);
    }

    /** @return array{code:int} */
    public function setAllowedActionsEnterprise(string $enterprise, array $params): array
    {
        return $this->operators->enterpriseAdmin👷SetAllowedActionsEnterprise()->call($enterprise, $params);
    }

    /** @return Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok */
    public function listSelfHostedRunnerGroupsForEnterprise(string $enterprise, string $visibleToOrganization, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnerGroupsForEnterprise()->call($enterprise, $visibleToOrganization, $perPage, $page);
    }

    /** @return Schema\RunnerGroupsEnterprise */
    public function createSelfHostedRunnerGroupForEnterprise(string $enterprise, array $params): RunnerGroupsEnterprise|array
    {
        return $this->operators->enterpriseAdmin👷CreateSelfHostedRunnerGroupForEnterprise()->call($enterprise, $params);
    }

    /** @return Schema\RunnerGroupsEnterprise */
    public function getSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId): RunnerGroupsEnterprise|array
    {
        return $this->operators->enterpriseAdmin👷GetSelfHostedRunnerGroupForEnterprise()->call($enterprise, $runnerGroupId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerGroupFromEnterprise(string $enterprise, int $runnerGroupId): array
    {
        return $this->operators->enterpriseAdmin👷DeleteSelfHostedRunnerGroupFromEnterprise()->call($enterprise, $runnerGroupId);
    }

    /** @return Schema\RunnerGroupsEnterprise */
    public function updateSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): RunnerGroupsEnterprise|array
    {
        return $this->operators->enterpriseAdmin👷UpdateSelfHostedRunnerGroupForEnterprise()->call($enterprise, $runnerGroupId, $params);
    }

    /** @return Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok */
    public function listSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok|array
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

    /** @return Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok */
    public function listSelfHostedRunnersForEnterprise(string $enterprise, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnersForEnterprise()->call($enterprise, $perPage, $page);
    }

    /** @return iterable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForEnterprise(string $enterprise): iterable
    {
        return $this->operators->enterpriseAdmin👷ListRunnerApplicationsForEnterprise()->call($enterprise);
    }

    /** @return Schema\AuthenticationToken */
    public function createRegistrationTokenForEnterprise(string $enterprise): AuthenticationToken|array
    {
        return $this->operators->enterpriseAdmin👷CreateRegistrationTokenForEnterprise()->call($enterprise);
    }

    /** @return Schema\AuthenticationToken */
    public function createRemoveTokenForEnterprise(string $enterprise): AuthenticationToken|array
    {
        return $this->operators->enterpriseAdmin👷CreateRemoveTokenForEnterprise()->call($enterprise);
    }

    /** @return Schema\Runner */
    public function getSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): Runner|array
    {
        return $this->operators->enterpriseAdmin👷GetSelfHostedRunnerForEnterprise()->call($enterprise, $runnerId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerFromEnterprise(string $enterprise, int $runnerId): array
    {
        return $this->operators->enterpriseAdmin👷DeleteSelfHostedRunnerFromEnterprise()->call($enterprise, $runnerId);
    }

    /** @return iterable<Schema\AuditLogEvent> */
    public function getAuditLog(string $enterprise, string $phrase, string $after, string $before, string $order, int $page, int $perPage): iterable
    {
        return $this->operators->enterpriseAdmin👷GetAuditLog()->call($enterprise, $phrase, $after, $before, $order, $page, $perPage);
    }

    /** @return iterable<Schema\AuditLogEvent> */
    public function getAuditLogListing(string $enterprise, string $phrase, string $after, string $before, string $order, int $page, int $perPage): iterable
    {
        return $this->operators->enterpriseAdmin👷GetAuditLogListing()->call($enterprise, $phrase, $after, $before, $order, $page, $perPage);
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
