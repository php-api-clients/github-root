<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheList;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsageByRepository;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsageOrgEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyForRepository;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsGetDefaultWorkflowPermissions;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsPublicKey;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsRepositoryPermissions;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsSecret;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsVariable;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsWorkflowAccessToRepository;
use ApiClients\Client\GitHubEnterprise\Schema\Artifact;
use ApiClients\Client\GitHubEnterprise\Schema\AuthenticationToken;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\Job;
use ApiClients\Client\GitHubEnterprise\Schema\OidcCustomSubRepo;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersInGroupForOrg\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationActionsVariable;
use ApiClients\Client\GitHubEnterprise\Schema\Runner;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg;
use ApiClients\Client\GitHubEnterprise\Schema\SelectedActions;
use ApiClients\Client\GitHubEnterprise\Schema\Workflow;
use ApiClients\Client\GitHubEnterprise\Schema\WorkflowRun;

final class Actions
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getActionsCacheUsageForEnterprise(string $enterprise): ActionsCacheUsageOrgEnterprise|array
    {
        return $this->operators->actions👷GetActionsCacheUsageForEnterprise()->call($enterprise);
    }

    /** @return */
    public function getActionsCacheUsagePolicyForEnterprise(string $enterprise): ActionsCacheUsagePolicyEnterprise|array
    {
        return $this->operators->actions👷GetActionsCacheUsagePolicyForEnterprise()->call($enterprise);
    }

    /** @return array{code:int} */
    public function setActionsCacheUsagePolicyForEnterprise(string $enterprise, array $params): array
    {
        return $this->operators->actions👷SetActionsCacheUsagePolicyForEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function getGithubActionsDefaultWorkflowPermissionsEnterprise(string $enterprise): ActionsGetDefaultWorkflowPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsDefaultWorkflowPermissionsEnterprise()->call($enterprise);
    }

    /** @return array{code:int} */
    public function setGithubActionsDefaultWorkflowPermissionsEnterprise(string $enterprise, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsDefaultWorkflowPermissionsEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function getActionsCacheUsageForOrg(string $org): ActionsCacheUsageOrgEnterprise|array
    {
        return $this->operators->actions👷GetActionsCacheUsageForOrg()->call($org);
    }

    /** @return */
    public function getActionsCacheUsageByRepoForOrg(string $org, int $perPage, int $page): Ok|array
    {
        return $this->operators->actions👷GetActionsCacheUsageByRepoForOrg()->call($org, $perPage, $page);
    }

    /** @return */
    public function getGithubActionsPermissionsOrganization(string $org): ActionsOrganizationPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsPermissionsOrganization()->call($org);
    }

    /** @return array{code:int} */
    public function setGithubActionsPermissionsOrganization(string $org, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsPermissionsOrganization()->call($org, $params);
    }

    /** @return */
    public function listSelectedRepositoriesEnabledGithubActionsOrganization(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization()->call($org, $perPage, $page);
    }

    /** @return array{code:int} */
    public function setSelectedRepositoriesEnabledGithubActionsOrganization(string $org, array $params): array
    {
        return $this->operators->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization()->call($org, $params);
    }

    /** @return array{code:int} */
    public function enableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): array
    {
        return $this->operators->actions👷EnableSelectedRepositoryGithubActionsOrganization()->call($org, $repositoryId);
    }

    /** @return array{code:int} */
    public function disableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): array
    {
        return $this->operators->actions👷DisableSelectedRepositoryGithubActionsOrganization()->call($org, $repositoryId);
    }

    /** @return */
    public function getAllowedActionsOrganization(string $org): SelectedActions|array
    {
        return $this->operators->actions👷GetAllowedActionsOrganization()->call($org);
    }

    /** @return array{code:int} */
    public function setAllowedActionsOrganization(string $org, array $params): array
    {
        return $this->operators->actions👷SetAllowedActionsOrganization()->call($org, $params);
    }

    /** @return */
    public function getGithubActionsDefaultWorkflowPermissionsOrganization(string $org): ActionsGetDefaultWorkflowPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization()->call($org);
    }

    /** @return array{code:int} */
    public function setGithubActionsDefaultWorkflowPermissionsOrganization(string $org, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization()->call($org, $params);
    }

    /** @return */
    public function listSelfHostedRunnerGroupsForOrg(string $org, string $visibleToRepository, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListSelfHostedRunnerGroupsForOrg()->call($org, $visibleToRepository, $perPage, $page);
    }

    /** @return */
    public function createSelfHostedRunnerGroupForOrg(string $org, array $params): RunnerGroupsOrg|array
    {
        return $this->operators->actions👷CreateSelfHostedRunnerGroupForOrg()->call($org, $params);
    }

    /** @return */
    public function getSelfHostedRunnerGroupForOrg(string $org, int $runnerGroupId): RunnerGroupsOrg|array
    {
        return $this->operators->actions👷GetSelfHostedRunnerGroupForOrg()->call($org, $runnerGroupId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerGroupFromOrg(string $org, int $runnerGroupId): array
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerGroupFromOrg()->call($org, $runnerGroupId);
    }

    /** @return */
    public function updateSelfHostedRunnerGroupForOrg(string $org, int $runnerGroupId, array $params): RunnerGroupsOrg|array
    {
        return $this->operators->actions👷UpdateSelfHostedRunnerGroupForOrg()->call($org, $runnerGroupId, $params);
    }

    /** @return */
    public function listRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $page, int $perPage): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $page, $perPage);
    }

    /** @return array{code:int} */
    public function setRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, array $params): array
    {
        return $this->operators->actions👷SetRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $params);
    }

    /** @return array{code:int} */
    public function addRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $repositoryId): array
    {
        return $this->operators->actions👷AddRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $repositoryId);
    }

    /** @return array{code:int} */
    public function removeRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $repositoryId): array
    {
        return $this->operators->actions👷RemoveRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $repositoryId);
    }

    /** @return */
    public function listSelfHostedRunnersInGroupForOrg(string $org, int $runnerGroupId, int $perPage, int $page): Json|array
    {
        return $this->operators->actions👷ListSelfHostedRunnersInGroupForOrg()->call($org, $runnerGroupId, $perPage, $page);
    }

    /** @return array{code:int} */
    public function setSelfHostedRunnersInGroupForOrg(string $org, int $runnerGroupId, array $params): array
    {
        return $this->operators->actions👷SetSelfHostedRunnersInGroupForOrg()->call($org, $runnerGroupId, $params);
    }

    /** @return array{code:int} */
    public function addSelfHostedRunnerToGroupForOrg(string $org, int $runnerGroupId, int $runnerId): array
    {
        return $this->operators->actions👷AddSelfHostedRunnerToGroupForOrg()->call($org, $runnerGroupId, $runnerId);
    }

    /** @return array{code:int} */
    public function removeSelfHostedRunnerFromGroupForOrg(string $org, int $runnerGroupId, int $runnerId): array
    {
        return $this->operators->actions👷RemoveSelfHostedRunnerFromGroupForOrg()->call($org, $runnerGroupId, $runnerId);
    }

    /** @return */
    public function listSelfHostedRunnersForOrg(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListSelfHostedRunnersForOrg()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForOrg(string $org): iterable
    {
        return $this->operators->actions👷ListRunnerApplicationsForOrg()->call($org);
    }

    /** @return */
    public function createRegistrationTokenForOrg(string $org): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRegistrationTokenForOrg()->call($org);
    }

    /** @return */
    public function createRemoveTokenForOrg(string $org): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRemoveTokenForOrg()->call($org);
    }

    /** @return */
    public function getSelfHostedRunnerForOrg(string $org, int $runnerId): Runner|array
    {
        return $this->operators->actions👷GetSelfHostedRunnerForOrg()->call($org, $runnerId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerFromOrg(string $org, int $runnerId): array
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerFromOrg()->call($org, $runnerId);
    }

    /** @return */
    public function listLabelsForSelfHostedRunnerForOrg(string $org, int $runnerId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListLabelsForSelfHostedRunnerForOrg()->call($org, $runnerId);
    }

    /** @return */
    public function setCustomLabelsForSelfHostedRunnerForOrg(string $org, int $runnerId, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷SetCustomLabelsForSelfHostedRunnerForOrg()->call($org, $runnerId, $params);
    }

    /** @return */
    public function addCustomLabelsToSelfHostedRunnerForOrg(string $org, int $runnerId, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷AddCustomLabelsToSelfHostedRunnerForOrg()->call($org, $runnerId, $params);
    }

    /** @return */
    public function removeAllCustomLabelsFromSelfHostedRunnerForOrg(string $org, int $runnerId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg()->call($org, $runnerId);
    }

    /** @return */
    public function removeCustomLabelFromSelfHostedRunnerForOrg(string $org, int $runnerId, string $name): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg()->call($org, $runnerId, $name);
    }

    /** @return */
    public function listOrgSecrets(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListOrgSecrets()->call($org, $perPage, $page);
    }

    /** @return */
    public function getOrgPublicKey(string $org): ActionsPublicKey|array
    {
        return $this->operators->actions👷GetOrgPublicKey()->call($org);
    }

    /** @return */
    public function getOrgSecret(string $org, string $secretName): OrganizationActionsSecret|array
    {
        return $this->operators->actions👷GetOrgSecret()->call($org, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateOrUpdateOrgSecret()->call($org, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteOrgSecret(string $org, string $secretName): array
    {
        return $this->operators->actions👷DeleteOrgSecret()->call($org, $secretName);
    }

    /** @return */
    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListSelectedReposForOrgSecret()->call($org, $secretName, $page, $perPage);
    }

    /** @return array{code:int} */
    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): array
    {
        return $this->operators->actions👷SetSelectedReposForOrgSecret()->call($org, $secretName, $params);
    }

    /** @return array{code:int} */
    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): array
    {
        return $this->operators->actions👷AddSelectedRepoToOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return array{code:int} */
    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): array
    {
        return $this->operators->actions👷RemoveSelectedRepoFromOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return */
    public function listOrgVariables(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListOrgVariables()->call($org, $perPage, $page);
    }

    /** @return */
    public function createOrgVariable(string $org, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateOrgVariable()->call($org, $params);
    }

    /** @return */
    public function getOrgVariable(string $org, string $name): OrganizationActionsVariable|array
    {
        return $this->operators->actions👷GetOrgVariable()->call($org, $name);
    }

    /** @return array{code:int} */
    public function deleteOrgVariable(string $org, string $name): array
    {
        return $this->operators->actions👷DeleteOrgVariable()->call($org, $name);
    }

    /** @return array{code:int} */
    public function updateOrgVariable(string $org, string $name, array $params): array
    {
        return $this->operators->actions👷UpdateOrgVariable()->call($org, $name, $params);
    }

    /** @return Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function listSelectedReposForOrgVariable(string $org, string $name, int $page, int $perPage): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListSelectedReposForOrgVariable()->call($org, $name, $page, $perPage);
    }

    /** @return array{code:int} */
    public function setSelectedReposForOrgVariable(string $org, string $name, array $params): array
    {
        return $this->operators->actions👷SetSelectedReposForOrgVariable()->call($org, $name, $params);
    }

    /** @return array{code:int} */
    public function addSelectedRepoToOrgVariable(string $org, string $name, int $repositoryId): array
    {
        return $this->operators->actions👷AddSelectedRepoToOrgVariable()->call($org, $name, $repositoryId);
    }

    /** @return array{code:int} */
    public function removeSelectedRepoFromOrgVariable(string $org, string $name, int $repositoryId): array
    {
        return $this->operators->actions👷RemoveSelectedRepoFromOrgVariable()->call($org, $name, $repositoryId);
    }

    /** @return */
    public function listArtifactsForRepo(string $owner, string $repo, string $name, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListArtifactsForRepo()->call($owner, $repo, $name, $perPage, $page);
    }

    /** @return */
    public function getArtifact(string $owner, string $repo, int $artifactId): Artifact|array
    {
        return $this->operators->actions👷GetArtifact()->call($owner, $repo, $artifactId);
    }

    /** @return array{code:int} */
    public function deleteArtifact(string $owner, string $repo, int $artifactId): array
    {
        return $this->operators->actions👷DeleteArtifact()->call($owner, $repo, $artifactId);
    }

    /** @return array{code:int,location:string} */
    public function downloadArtifact(string $owner, string $repo, int $artifactId, string $archiveFormat): array
    {
        return $this->operators->actions👷DownloadArtifact()->call($owner, $repo, $artifactId, $archiveFormat);
    }

    /** @return Observable<string> */
    public function downloadArtifactStreaming(string $owner, string $repo, int $artifactId, string $archiveFormat): iterable
    {
        return $this->operators->actions👷DownloadArtifactStreaming()->call($owner, $repo, $artifactId, $archiveFormat);
    }

    /** @return */
    public function getActionsCacheUsage(string $owner, string $repo): ActionsCacheUsageByRepository|array
    {
        return $this->operators->actions👷GetActionsCacheUsage()->call($owner, $repo);
    }

    /** @return */
    public function getActionsCacheUsagePolicy(string $owner, string $repo): ActionsCacheUsagePolicyForRepository|array
    {
        return $this->operators->actions👷GetActionsCacheUsagePolicy()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function setActionsCacheUsagePolicy(string $owner, string $repo, array $params): array
    {
        return $this->operators->actions👷SetActionsCacheUsagePolicy()->call($owner, $repo, $params);
    }

    /** @return */
    public function getActionsCacheList(string $owner, string $repo, string $ref, string $key, int $perPage, int $page, string $sort, string $direction): ActionsCacheList|array
    {
        return $this->operators->actions👷GetActionsCacheList()->call($owner, $repo, $ref, $key, $perPage, $page, $sort, $direction);
    }

    /** @return */
    public function deleteActionsCacheByKey(string $owner, string $repo, string $key, string $ref): ActionsCacheList|array
    {
        return $this->operators->actions👷DeleteActionsCacheByKey()->call($owner, $repo, $key, $ref);
    }

    /** @return array{code:int} */
    public function deleteActionsCacheById(string $owner, string $repo, int $cacheId): array
    {
        return $this->operators->actions👷DeleteActionsCacheById()->call($owner, $repo, $cacheId);
    }

    /** @return */
    public function getJobForWorkflowRun(string $owner, string $repo, int $jobId): Job|array
    {
        return $this->operators->actions👷GetJobForWorkflowRun()->call($owner, $repo, $jobId);
    }

    /** @return array{code:int,location:string} */
    public function downloadJobLogsForWorkflowRun(string $owner, string $repo, int $jobId): array
    {
        return $this->operators->actions👷DownloadJobLogsForWorkflowRun()->call($owner, $repo, $jobId);
    }

    /** @return Observable<string> */
    public function downloadJobLogsForWorkflowRunStreaming(string $owner, string $repo, int $jobId): iterable
    {
        return $this->operators->actions👷DownloadJobLogsForWorkflowRunStreaming()->call($owner, $repo, $jobId);
    }

    /** @return */
    public function reRunJobForWorkflowRun(string $owner, string $repo, int $jobId, array $params): EmptyObject|array
    {
        return $this->operators->actions👷ReRunJobForWorkflowRun()->call($owner, $repo, $jobId, $params);
    }

    /** @return */
    public function getCustomOidcSubClaimForRepo(string $owner, string $repo): OidcCustomSubRepo|array
    {
        return $this->operators->actions👷GetCustomOidcSubClaimForRepo()->call($owner, $repo);
    }

    /** @return */
    public function setCustomOidcSubClaimForRepo(string $owner, string $repo, array $params): EmptyObject|array
    {
        return $this->operators->actions👷SetCustomOidcSubClaimForRepo()->call($owner, $repo, $params);
    }

    /** @return */
    public function listRepoOrganizationSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListRepoOrganizationSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function listRepoOrganizationVariables(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListRepoOrganizationVariables()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getGithubActionsPermissionsRepository(string $owner, string $repo): ActionsRepositoryPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsPermissionsRepository()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function setGithubActionsPermissionsRepository(string $owner, string $repo, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsPermissionsRepository()->call($owner, $repo, $params);
    }

    /** @return */
    public function getWorkflowAccessToRepository(string $owner, string $repo): ActionsWorkflowAccessToRepository|array
    {
        return $this->operators->actions👷GetWorkflowAccessToRepository()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function setWorkflowAccessToRepository(string $owner, string $repo, array $params): array
    {
        return $this->operators->actions👷SetWorkflowAccessToRepository()->call($owner, $repo, $params);
    }

    /** @return */
    public function getAllowedActionsRepository(string $owner, string $repo): SelectedActions|array
    {
        return $this->operators->actions👷GetAllowedActionsRepository()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function setAllowedActionsRepository(string $owner, string $repo, array $params): array
    {
        return $this->operators->actions👷SetAllowedActionsRepository()->call($owner, $repo, $params);
    }

    /** @return */
    public function getGithubActionsDefaultWorkflowPermissionsRepository(string $owner, string $repo): ActionsGetDefaultWorkflowPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function setGithubActionsDefaultWorkflowPermissionsRepository(string $owner, string $repo, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository()->call($owner, $repo, $params);
    }

    /** @return */
    public function listSelfHostedRunnersForRepo(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListSelfHostedRunnersForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForRepo(string $owner, string $repo): iterable
    {
        return $this->operators->actions👷ListRunnerApplicationsForRepo()->call($owner, $repo);
    }

    /** @return */
    public function createRegistrationTokenForRepo(string $owner, string $repo): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRegistrationTokenForRepo()->call($owner, $repo);
    }

    /** @return */
    public function createRemoveTokenForRepo(string $owner, string $repo): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRemoveTokenForRepo()->call($owner, $repo);
    }

    /** @return */
    public function getSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): Runner|array
    {
        return $this->operators->actions👷GetSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerFromRepo(string $owner, string $repo, int $runnerId): array
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerFromRepo()->call($owner, $repo, $runnerId);
    }

    /** @return */
    public function listLabelsForSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListLabelsForSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId);
    }

    /** @return */
    public function setCustomLabelsForSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷SetCustomLabelsForSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId, $params);
    }

    /** @return */
    public function addCustomLabelsToSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷AddCustomLabelsToSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId, $params);
    }

    /** @return */
    public function removeAllCustomLabelsFromSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId);
    }

    /** @return */
    public function removeCustomLabelFromSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, string $name): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId, $name);
    }

    /** @return */
    public function listWorkflowRunsForRepo(string $owner, string $repo, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage, int $page, bool $excludePullRequests): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListWorkflowRunsForRepo()->call($owner, $repo, $actor, $branch, $event, $status, $created, $checkSuiteId, $headSha, $perPage, $page, $excludePullRequests);
    }

    /** @return */
    public function getWorkflowRun(string $owner, string $repo, int $runId, bool $excludePullRequests): WorkflowRun|array
    {
        return $this->operators->actions👷GetWorkflowRun()->call($owner, $repo, $runId, $excludePullRequests);
    }

    /** @return array{code:int} */
    public function deleteWorkflowRun(string $owner, string $repo, int $runId): array
    {
        return $this->operators->actions👷DeleteWorkflowRun()->call($owner, $repo, $runId);
    }

    /** @return Observable<Schema\EnvironmentApprovals> */
    public function getReviewsForRun(string $owner, string $repo, int $runId): iterable
    {
        return $this->operators->actions👷GetReviewsForRun()->call($owner, $repo, $runId);
    }

    /** @return Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json */
    public function listWorkflowRunArtifacts(string $owner, string $repo, int $runId, string $name, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListWorkflowRunArtifacts()->call($owner, $repo, $runId, $name, $perPage, $page);
    }

    /** @return */
    public function getWorkflowRunAttempt(string $owner, string $repo, int $runId, int $attemptNumber, bool $excludePullRequests): WorkflowRun|array
    {
        return $this->operators->actions👷GetWorkflowRunAttempt()->call($owner, $repo, $runId, $attemptNumber, $excludePullRequests);
    }

    /** @return */
    public function listJobsForWorkflowRunAttempt(string $owner, string $repo, int $runId, int $attemptNumber, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListJobsForWorkflowRunAttempt()->call($owner, $repo, $runId, $attemptNumber, $perPage, $page);
    }

    /** @return array{code:int,location:string} */
    public function downloadWorkflowRunAttemptLogs(string $owner, string $repo, int $runId, int $attemptNumber): array
    {
        return $this->operators->actions👷DownloadWorkflowRunAttemptLogs()->call($owner, $repo, $runId, $attemptNumber);
    }

    /** @return Observable<string> */
    public function downloadWorkflowRunAttemptLogsStreaming(string $owner, string $repo, int $runId, int $attemptNumber): iterable
    {
        return $this->operators->actions👷DownloadWorkflowRunAttemptLogsStreaming()->call($owner, $repo, $runId, $attemptNumber);
    }

    /** @return */
    public function cancelWorkflowRun(string $owner, string $repo, int $runId): EmptyObject|array
    {
        return $this->operators->actions👷CancelWorkflowRun()->call($owner, $repo, $runId);
    }

    /** @return */
    public function listJobsForWorkflowRun(string $owner, string $repo, int $runId, string $filter, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListJobsForWorkflowRun()->call($owner, $repo, $runId, $filter, $perPage, $page);
    }

    /** @return array{code:int,location:string} */
    public function downloadWorkflowRunLogs(string $owner, string $repo, int $runId): array
    {
        return $this->operators->actions👷DownloadWorkflowRunLogs()->call($owner, $repo, $runId);
    }

    /** @return Observable<string> */
    public function downloadWorkflowRunLogsStreaming(string $owner, string $repo, int $runId): iterable
    {
        return $this->operators->actions👷DownloadWorkflowRunLogsStreaming()->call($owner, $repo, $runId);
    }

    /** @return array{code:int} */
    public function deleteWorkflowRunLogs(string $owner, string $repo, int $runId): array
    {
        return $this->operators->actions👷DeleteWorkflowRunLogs()->call($owner, $repo, $runId);
    }

    /** @return Observable<Schema\PendingDeployment> */
    public function getPendingDeploymentsForRun(string $owner, string $repo, int $runId): iterable
    {
        return $this->operators->actions👷GetPendingDeploymentsForRun()->call($owner, $repo, $runId);
    }

    /** @return Observable<Schema\Deployment> */
    public function reviewPendingDeploymentsForRun(string $owner, string $repo, int $runId, array $params): iterable
    {
        return $this->operators->actions👷ReviewPendingDeploymentsForRun()->call($owner, $repo, $runId, $params);
    }

    /** @return */
    public function reRunWorkflow(string $owner, string $repo, int $runId, array $params): EmptyObject|array
    {
        return $this->operators->actions👷ReRunWorkflow()->call($owner, $repo, $runId, $params);
    }

    /** @return */
    public function reRunWorkflowFailedJobs(string $owner, string $repo, int $runId, array $params): EmptyObject|array
    {
        return $this->operators->actions👷ReRunWorkflowFailedJobs()->call($owner, $repo, $runId, $params);
    }

    /** @return */
    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListRepoSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getRepoPublicKey(string $owner, string $repo): ActionsPublicKey|array
    {
        return $this->operators->actions👷GetRepoPublicKey()->call($owner, $repo);
    }

    /** @return */
    public function getRepoSecret(string $owner, string $repo, string $secretName): ActionsSecret|array
    {
        return $this->operators->actions👷GetRepoSecret()->call($owner, $repo, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateOrUpdateRepoSecret()->call($owner, $repo, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteRepoSecret(string $owner, string $repo, string $secretName): array
    {
        return $this->operators->actions👷DeleteRepoSecret()->call($owner, $repo, $secretName);
    }

    /** @return */
    public function listRepoVariables(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListRepoVariables()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function createRepoVariable(string $owner, string $repo, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateRepoVariable()->call($owner, $repo, $params);
    }

    /** @return */
    public function getRepoVariable(string $owner, string $repo, string $name): ActionsVariable|array
    {
        return $this->operators->actions👷GetRepoVariable()->call($owner, $repo, $name);
    }

    /** @return array{code:int} */
    public function deleteRepoVariable(string $owner, string $repo, string $name): array
    {
        return $this->operators->actions👷DeleteRepoVariable()->call($owner, $repo, $name);
    }

    /** @return array{code:int} */
    public function updateRepoVariable(string $owner, string $repo, string $name, array $params): array
    {
        return $this->operators->actions👷UpdateRepoVariable()->call($owner, $repo, $name, $params);
    }

    /** @return */
    public function listRepoWorkflows(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListRepoWorkflows()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getWorkflow(string $owner, string $repo, mixed $workflowId): Workflow|array
    {
        return $this->operators->actions👷GetWorkflow()->call($owner, $repo, $workflowId);
    }

    /** @return array{code:int} */
    public function disableWorkflow(string $owner, string $repo, mixed $workflowId): array
    {
        return $this->operators->actions👷DisableWorkflow()->call($owner, $repo, $workflowId);
    }

    /** @return array{code:int} */
    public function createWorkflowDispatch(string $owner, string $repo, mixed $workflowId, array $params): array
    {
        return $this->operators->actions👷CreateWorkflowDispatch()->call($owner, $repo, $workflowId, $params);
    }

    /** @return array{code:int} */
    public function enableWorkflow(string $owner, string $repo, mixed $workflowId): array
    {
        return $this->operators->actions👷EnableWorkflow()->call($owner, $repo, $workflowId);
    }

    /** @return */
    public function listWorkflowRuns(string $owner, string $repo, mixed $workflowId, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage, int $page, bool $excludePullRequests): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListWorkflowRuns()->call($owner, $repo, $workflowId, $actor, $branch, $event, $status, $created, $checkSuiteId, $headSha, $perPage, $page, $excludePullRequests);
    }

    /** @return */
    public function listEnvironmentSecrets(int $repositoryId, string $environmentName, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListEnvironmentSecrets()->call($repositoryId, $environmentName, $perPage, $page);
    }

    /** @return */
    public function getEnvironmentPublicKey(int $repositoryId, string $environmentName): ActionsPublicKey|array
    {
        return $this->operators->actions👷GetEnvironmentPublicKey()->call($repositoryId, $environmentName);
    }

    /** @return */
    public function getEnvironmentSecret(int $repositoryId, string $environmentName, string $secretName): ActionsSecret|array
    {
        return $this->operators->actions👷GetEnvironmentSecret()->call($repositoryId, $environmentName, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateEnvironmentSecret(int $repositoryId, string $environmentName, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateOrUpdateEnvironmentSecret()->call($repositoryId, $environmentName, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteEnvironmentSecret(int $repositoryId, string $environmentName, string $secretName): array
    {
        return $this->operators->actions👷DeleteEnvironmentSecret()->call($repositoryId, $environmentName, $secretName);
    }

    /** @return */
    public function listEnvironmentVariables(int $repositoryId, string $environmentName, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListEnvironmentVariables\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListEnvironmentVariables()->call($repositoryId, $environmentName, $perPage, $page);
    }

    /** @return */
    public function createEnvironmentVariable(int $repositoryId, string $environmentName, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateEnvironmentVariable()->call($repositoryId, $environmentName, $params);
    }

    /** @return */
    public function getEnvironmentVariable(int $repositoryId, string $environmentName, string $name): ActionsVariable|array
    {
        return $this->operators->actions👷GetEnvironmentVariable()->call($repositoryId, $environmentName, $name);
    }

    /** @return array{code:int} */
    public function deleteEnvironmentVariable(int $repositoryId, string $name, string $environmentName): array
    {
        return $this->operators->actions👷DeleteEnvironmentVariable()->call($repositoryId, $name, $environmentName);
    }

    /** @return array{code:int} */
    public function updateEnvironmentVariable(int $repositoryId, string $name, string $environmentName, array $params): array
    {
        return $this->operators->actions👷UpdateEnvironmentVariable()->call($repositoryId, $name, $environmentName, $params);
    }
}
