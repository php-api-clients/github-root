<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsPublicKey;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsRepositoryPermissions;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsSecret;
use ApiClients\Client\GitHubEnterprise\Schema\Artifact;
use ApiClients\Client\GitHubEnterprise\Schema\AuthenticationToken;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\Job;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersInGroupForOrg\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHubEnterprise\Schema\Runner;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg;
use ApiClients\Client\GitHubEnterprise\Schema\SelectedActions;
use ApiClients\Client\GitHubEnterprise\Schema\Workflow;
use ApiClients\Client\GitHubEnterprise\Schema\WorkflowRun;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Actions
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function getGithubActionsPermissionsOrganization(string $org): ActionsOrganizationPermissions
    {
        return $this->operators->actions👷GetGithubActionsPermissionsOrganization()->call($org);
    }

    public function setGithubActionsPermissionsOrganization(string $org, array $params): WithoutBody
    {
        return $this->operators->actions👷SetGithubActionsPermissionsOrganization()->call($org, $params);
    }

    public function listSelectedRepositoriesEnabledGithubActionsOrganization(string $org, int $perPage, int $page): Ok
    {
        return $this->operators->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization()->call($org, $perPage, $page);
    }

    public function setSelectedRepositoriesEnabledGithubActionsOrganization(string $org, array $params): WithoutBody
    {
        return $this->operators->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization()->call($org, $params);
    }

    public function enableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷EnableSelectedRepositoryGithubActionsOrganization()->call($org, $repositoryId);
    }

    public function disableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷DisableSelectedRepositoryGithubActionsOrganization()->call($org, $repositoryId);
    }

    public function getAllowedActionsOrganization(string $org): SelectedActions
    {
        return $this->operators->actions👷GetAllowedActionsOrganization()->call($org);
    }

    public function setAllowedActionsOrganization(string $org, array $params): WithoutBody
    {
        return $this->operators->actions👷SetAllowedActionsOrganization()->call($org, $params);
    }

    public function listSelfHostedRunnerGroupsForOrg(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListSelfHostedRunnerGroupsForOrg()->call($org, $perPage, $page);
    }

    public function createSelfHostedRunnerGroupForOrg(string $org, array $params): RunnerGroupsOrg
    {
        return $this->operators->actions👷CreateSelfHostedRunnerGroupForOrg()->call($org, $params);
    }

    public function getSelfHostedRunnerGroupForOrg(string $org, int $runnerGroupId): RunnerGroupsOrg
    {
        return $this->operators->actions👷GetSelfHostedRunnerGroupForOrg()->call($org, $runnerGroupId);
    }

    public function deleteSelfHostedRunnerGroupFromOrg(string $org, int $runnerGroupId): WithoutBody
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerGroupFromOrg()->call($org, $runnerGroupId);
    }

    public function updateSelfHostedRunnerGroupForOrg(string $org, int $runnerGroupId, array $params): RunnerGroupsOrg
    {
        return $this->operators->actions👷UpdateSelfHostedRunnerGroupForOrg()->call($org, $runnerGroupId, $params);
    }

    public function listRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $page, int $perPage): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $page, $perPage);
    }

    public function setRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, array $params): WithoutBody
    {
        return $this->operators->actions👷SetRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $params);
    }

    public function addRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷AddRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $repositoryId);
    }

    public function removeRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷RemoveRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $repositoryId);
    }

    public function listSelfHostedRunnersInGroupForOrg(string $org, int $runnerGroupId, int $perPage, int $page): Json
    {
        return $this->operators->actions👷ListSelfHostedRunnersInGroupForOrg()->call($org, $runnerGroupId, $perPage, $page);
    }

    public function setSelfHostedRunnersInGroupForOrg(string $org, int $runnerGroupId, array $params): WithoutBody
    {
        return $this->operators->actions👷SetSelfHostedRunnersInGroupForOrg()->call($org, $runnerGroupId, $params);
    }

    public function addSelfHostedRunnerToGroupForOrg(string $org, int $runnerGroupId, int $runnerId): WithoutBody
    {
        return $this->operators->actions👷AddSelfHostedRunnerToGroupForOrg()->call($org, $runnerGroupId, $runnerId);
    }

    public function removeSelfHostedRunnerFromGroupForOrg(string $org, int $runnerGroupId, int $runnerId): WithoutBody
    {
        return $this->operators->actions👷RemoveSelfHostedRunnerFromGroupForOrg()->call($org, $runnerGroupId, $runnerId);
    }

    public function listSelfHostedRunnersForOrg(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListSelfHostedRunnersForOrg()->call($org, $perPage, $page);
    }

    /** @return iterable<int,Schema\RunnerApplication> */
    public function listRunnerApplicationsForOrg(string $org): iterable
    {
        return $this->operators->actions👷ListRunnerApplicationsForOrg()->call($org);
    }

    public function createRegistrationTokenForOrg(string $org): AuthenticationToken
    {
        return $this->operators->actions👷CreateRegistrationTokenForOrg()->call($org);
    }

    public function createRemoveTokenForOrg(string $org): AuthenticationToken
    {
        return $this->operators->actions👷CreateRemoveTokenForOrg()->call($org);
    }

    public function getSelfHostedRunnerForOrg(string $org, int $runnerId): Runner
    {
        return $this->operators->actions👷GetSelfHostedRunnerForOrg()->call($org, $runnerId);
    }

    public function deleteSelfHostedRunnerFromOrg(string $org, int $runnerId): WithoutBody
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerFromOrg()->call($org, $runnerId);
    }

    public function listOrgSecrets(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListOrgSecrets()->call($org, $perPage, $page);
    }

    public function getOrgPublicKey(string $org): ActionsPublicKey
    {
        return $this->operators->actions👷GetOrgPublicKey()->call($org);
    }

    public function getOrgSecret(string $org, string $secretName): OrganizationActionsSecret
    {
        return $this->operators->actions👷GetOrgSecret()->call($org, $secretName);
    }

    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): EmptyObject|WithoutBody
    {
        return $this->operators->actions👷CreateOrUpdateOrgSecret()->call($org, $secretName, $params);
    }

    public function deleteOrgSecret(string $org, string $secretName): WithoutBody
    {
        return $this->operators->actions👷DeleteOrgSecret()->call($org, $secretName);
    }

    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListSelectedReposForOrgSecret()->call($org, $secretName, $page, $perPage);
    }

    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): WithoutBody
    {
        return $this->operators->actions👷SetSelectedReposForOrgSecret()->call($org, $secretName, $params);
    }

    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷AddSelectedRepoToOrgSecret()->call($org, $secretName, $repositoryId);
    }

    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷RemoveSelectedRepoFromOrgSecret()->call($org, $secretName, $repositoryId);
    }

    public function listArtifactsForRepo(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListArtifactsForRepo()->call($owner, $repo, $perPage, $page);
    }

    public function getArtifact(string $owner, string $repo, int $artifactId): Artifact
    {
        return $this->operators->actions👷GetArtifact()->call($owner, $repo, $artifactId);
    }

    public function deleteArtifact(string $owner, string $repo, int $artifactId): WithoutBody
    {
        return $this->operators->actions👷DeleteArtifact()->call($owner, $repo, $artifactId);
    }

    public function downloadArtifact(string $owner, string $repo, int $artifactId, string $archiveFormat): WithoutBody
    {
        return $this->operators->actions👷DownloadArtifact()->call($owner, $repo, $artifactId, $archiveFormat);
    }

    /** @return iterable<int,string> */
    public function downloadArtifactStreaming(string $owner, string $repo, int $artifactId, string $archiveFormat): iterable
    {
        return $this->operators->actions👷DownloadArtifactStreaming()->call($owner, $repo, $artifactId, $archiveFormat);
    }

    public function getJobForWorkflowRun(string $owner, string $repo, int $jobId): Job
    {
        return $this->operators->actions👷GetJobForWorkflowRun()->call($owner, $repo, $jobId);
    }

    public function downloadJobLogsForWorkflowRun(string $owner, string $repo, int $jobId): WithoutBody
    {
        return $this->operators->actions👷DownloadJobLogsForWorkflowRun()->call($owner, $repo, $jobId);
    }

    /** @return iterable<int,string> */
    public function downloadJobLogsForWorkflowRunStreaming(string $owner, string $repo, int $jobId): iterable
    {
        return $this->operators->actions👷DownloadJobLogsForWorkflowRunStreaming()->call($owner, $repo, $jobId);
    }

    public function getGithubActionsPermissionsRepository(string $owner, string $repo): ActionsRepositoryPermissions
    {
        return $this->operators->actions👷GetGithubActionsPermissionsRepository()->call($owner, $repo);
    }

    public function setGithubActionsPermissionsRepository(string $owner, string $repo, array $params): WithoutBody
    {
        return $this->operators->actions👷SetGithubActionsPermissionsRepository()->call($owner, $repo, $params);
    }

    public function getAllowedActionsRepository(string $owner, string $repo): SelectedActions
    {
        return $this->operators->actions👷GetAllowedActionsRepository()->call($owner, $repo);
    }

    public function setAllowedActionsRepository(string $owner, string $repo, array $params): WithoutBody
    {
        return $this->operators->actions👷SetAllowedActionsRepository()->call($owner, $repo, $params);
    }

    public function listSelfHostedRunnersForRepo(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListSelfHostedRunnersForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\RunnerApplication> */
    public function listRunnerApplicationsForRepo(string $owner, string $repo): iterable
    {
        return $this->operators->actions👷ListRunnerApplicationsForRepo()->call($owner, $repo);
    }

    public function createRegistrationTokenForRepo(string $owner, string $repo): AuthenticationToken
    {
        return $this->operators->actions👷CreateRegistrationTokenForRepo()->call($owner, $repo);
    }

    public function createRemoveTokenForRepo(string $owner, string $repo): AuthenticationToken
    {
        return $this->operators->actions👷CreateRemoveTokenForRepo()->call($owner, $repo);
    }

    public function getSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): Runner
    {
        return $this->operators->actions👷GetSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId);
    }

    public function deleteSelfHostedRunnerFromRepo(string $owner, string $repo, int $runnerId): WithoutBody
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerFromRepo()->call($owner, $repo, $runnerId);
    }

    public function listWorkflowRunsForRepo(string $owner, string $repo, string $actor, string $branch, string $event, string $status, string $created, int $perPage, int $page, bool $excludePullRequests): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListWorkflowRunsForRepo()->call($owner, $repo, $actor, $branch, $event, $status, $created, $perPage, $page, $excludePullRequests);
    }

    public function getWorkflowRun(string $owner, string $repo, int $runId, bool $excludePullRequests): WorkflowRun
    {
        return $this->operators->actions👷GetWorkflowRun()->call($owner, $repo, $runId, $excludePullRequests);
    }

    public function deleteWorkflowRun(string $owner, string $repo, int $runId): WithoutBody
    {
        return $this->operators->actions👷DeleteWorkflowRun()->call($owner, $repo, $runId);
    }

    public function listWorkflowRunArtifacts(string $owner, string $repo, int $runId, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListWorkflowRunArtifacts()->call($owner, $repo, $runId, $perPage, $page);
    }

    public function cancelWorkflowRun(string $owner, string $repo, int $runId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\CancelWorkflowRun\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->actions👷CancelWorkflowRun()->call($owner, $repo, $runId);
    }

    public function listJobsForWorkflowRun(string $owner, string $repo, int $runId, string $filter, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListJobsForWorkflowRun()->call($owner, $repo, $runId, $filter, $perPage, $page);
    }

    public function downloadWorkflowRunLogs(string $owner, string $repo, int $runId): WithoutBody
    {
        return $this->operators->actions👷DownloadWorkflowRunLogs()->call($owner, $repo, $runId);
    }

    /** @return iterable<int,string> */
    public function downloadWorkflowRunLogsStreaming(string $owner, string $repo, int $runId): iterable
    {
        return $this->operators->actions👷DownloadWorkflowRunLogsStreaming()->call($owner, $repo, $runId);
    }

    public function deleteWorkflowRunLogs(string $owner, string $repo, int $runId): WithoutBody
    {
        return $this->operators->actions👷DeleteWorkflowRunLogs()->call($owner, $repo, $runId);
    }

    public function reRunWorkflow(string $owner, string $repo, int $runId, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ReRunWorkflow\Response\ApplicationJson\Created\Application\Json
    {
        return $this->operators->actions👷ReRunWorkflow()->call($owner, $repo, $runId, $params);
    }

    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListRepoSecrets()->call($owner, $repo, $perPage, $page);
    }

    public function getRepoPublicKey(string $owner, string $repo): ActionsPublicKey
    {
        return $this->operators->actions👷GetRepoPublicKey()->call($owner, $repo);
    }

    public function getRepoSecret(string $owner, string $repo, string $secretName): ActionsSecret
    {
        return $this->operators->actions👷GetRepoSecret()->call($owner, $repo, $secretName);
    }

    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\CreateOrUpdateRepoSecret\Response\ApplicationJson\Created\Application\Json|WithoutBody
    {
        return $this->operators->actions👷CreateOrUpdateRepoSecret()->call($owner, $repo, $secretName, $params);
    }

    public function deleteRepoSecret(string $owner, string $repo, string $secretName): WithoutBody
    {
        return $this->operators->actions👷DeleteRepoSecret()->call($owner, $repo, $secretName);
    }

    public function listRepoWorkflows(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListRepoWorkflows()->call($owner, $repo, $perPage, $page);
    }

    public function getWorkflow(string $owner, string $repo, mixed $workflowId): Workflow
    {
        return $this->operators->actions👷GetWorkflow()->call($owner, $repo, $workflowId);
    }

    public function disableWorkflow(string $owner, string $repo, mixed $workflowId): WithoutBody
    {
        return $this->operators->actions👷DisableWorkflow()->call($owner, $repo, $workflowId);
    }

    public function createWorkflowDispatch(string $owner, string $repo, mixed $workflowId, array $params): WithoutBody
    {
        return $this->operators->actions👷CreateWorkflowDispatch()->call($owner, $repo, $workflowId, $params);
    }

    public function enableWorkflow(string $owner, string $repo, mixed $workflowId): WithoutBody
    {
        return $this->operators->actions👷EnableWorkflow()->call($owner, $repo, $workflowId);
    }

    public function listWorkflowRuns(string $owner, string $repo, mixed $workflowId, string $actor, string $branch, string $event, string $status, string $created, int $perPage, int $page, bool $excludePullRequests): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListWorkflowRuns()->call($owner, $repo, $workflowId, $actor, $branch, $event, $status, $created, $perPage, $page, $excludePullRequests);
    }
}
