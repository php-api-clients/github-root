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

    public function deleteUser(string $username): WithoutBody
    {
        return $this->operators->enterpriseAdmin👷DeleteUser()->call($username);
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

    public function listSelfHostedRunnerGroupsForEnterprise(string $enterprise, string $visibleToOrganization, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok
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

    public function listSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok
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

    public function listSelfHostedRunnersForEnterprise(string $enterprise, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->enterpriseAdmin👷ListSelfHostedRunnersForEnterprise()->call($enterprise, $perPage, $page);
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

    /** @return iterable<int,Schema\AuditLogEvent> */
    public function getAuditLog(string $enterprise, string $phrase, string $after, string $before, string $order, int $page, int $perPage): iterable
    {
        return $this->operators->enterpriseAdmin👷GetAuditLog()->call($enterprise, $phrase, $after, $before, $order, $page, $perPage);
    }

    /** @return iterable<int,Schema\AuditLogEvent> */
    public function getAuditLogListing(string $enterprise, string $phrase, string $after, string $before, string $order, int $page, int $perPage): iterable
    {
        return $this->operators->enterpriseAdmin👷GetAuditLogListing()->call($enterprise, $phrase, $after, $before, $order, $page, $perPage);
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
