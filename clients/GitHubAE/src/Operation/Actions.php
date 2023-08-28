<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\ActionsGetDefaultWorkflowPermissions;
use ApiClients\Client\GitHubAE\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHubAE\Schema\ActionsPublicKey;
use ApiClients\Client\GitHubAE\Schema\ActionsRepositoryPermissions;
use ApiClients\Client\GitHubAE\Schema\ActionsSecret;
use ApiClients\Client\GitHubAE\Schema\Artifact;
use ApiClients\Client\GitHubAE\Schema\AuthenticationToken;
use ApiClients\Client\GitHubAE\Schema\EmptyObject;
use ApiClients\Client\GitHubAE\Schema\Job;
use ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubAE\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHubAE\Schema\Runner;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg;
use ApiClients\Client\GitHubAE\Schema\SelectedActions;
use ApiClients\Client\GitHubAE\Schema\Workflow;
use ApiClients\Client\GitHubAE\Schema\WorkflowRun;
use ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage;
use ApiClients\Client\GitHubAE\Schema\WorkflowUsage;

final class Actions
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\ActionsOrganizationPermissions */
    public function getGithubActionsPermissionsOrganization(string $org): ActionsOrganizationPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsPermissionsOrganization()->call($org);
    }

    /** @return array{code:int} */
    public function setGithubActionsPermissionsOrganization(string $org, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsPermissionsOrganization()->call($org, $params);
    }

    /** @return Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok */
    public function listSelectedRepositoriesEnabledGithubActionsOrganization(string $org, int $perPage, int $page): Ok|array
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

    /** @return Schema\SelectedActions */
    public function getAllowedActionsOrganization(string $org): SelectedActions|array
    {
        return $this->operators->actions👷GetAllowedActionsOrganization()->call($org);
    }

    /** @return array{code:int} */
    public function setAllowedActionsOrganization(string $org, array $params): array
    {
        return $this->operators->actions👷SetAllowedActionsOrganization()->call($org, $params);
    }

    /** @return Schema\ActionsGetDefaultWorkflowPermissions */
    public function getGithubActionsDefaultWorkflowPermissionsOrganization(string $org): ActionsGetDefaultWorkflowPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization()->call($org);
    }

    /** @return array{code:int} */
    public function setGithubActionsDefaultWorkflowPermissionsOrganization(string $org, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization()->call($org, $params);
    }

    /** @return Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok */
    public function listSelfHostedRunnerGroupsForOrg(string $org, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListSelfHostedRunnerGroupsForOrg()->call($org, $perPage, $page);
    }

    /** @return Schema\RunnerGroupsOrg */
    public function createSelfHostedRunnerGroupForOrg(string $org, array $params): RunnerGroupsOrg|array
    {
        return $this->operators->actions👷CreateSelfHostedRunnerGroupForOrg()->call($org, $params);
    }

    /** @return Schema\RunnerGroupsOrg */
    public function getSelfHostedRunnerGroupForOrg(string $org, int $runnerGroupId): RunnerGroupsOrg|array
    {
        return $this->operators->actions👷GetSelfHostedRunnerGroupForOrg()->call($org, $runnerGroupId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerGroupFromOrg(string $org, int $runnerGroupId): array
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerGroupFromOrg()->call($org, $runnerGroupId);
    }

    /** @return Schema\RunnerGroupsOrg */
    public function updateSelfHostedRunnerGroupForOrg(string $org, int $runnerGroupId, array $params): RunnerGroupsOrg|array
    {
        return $this->operators->actions👷UpdateSelfHostedRunnerGroupForOrg()->call($org, $runnerGroupId, $params);
    }

    /** @return array{code:int} */
    public function addSelfHostedRunnerToGroupForOrg(string $org, int $runnerGroupId, int $runnerId): array
    {
        return $this->operators->actions👷AddSelfHostedRunnerToGroupForOrg()->call($org, $runnerGroupId, $runnerId);
    }

    /** @return Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok */
    public function listSelfHostedRunnersForOrg(string $org, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListSelfHostedRunnersForOrg()->call($org, $perPage, $page);
    }

    /** @return iterable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForOrg(string $org): iterable
    {
        return $this->operators->actions👷ListRunnerApplicationsForOrg()->call($org);
    }

    /** @return Schema\AuthenticationToken */
    public function createRegistrationTokenForOrg(string $org): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRegistrationTokenForOrg()->call($org);
    }

    /** @return Schema\AuthenticationToken */
    public function createRemoveTokenForOrg(string $org): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRemoveTokenForOrg()->call($org);
    }

    /** @return Schema\Runner */
    public function getSelfHostedRunnerForOrg(string $org, int $runnerId): Runner|array
    {
        return $this->operators->actions👷GetSelfHostedRunnerForOrg()->call($org, $runnerId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerFromOrg(string $org, int $runnerId): array
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerFromOrg()->call($org, $runnerId);
    }

    /** @return Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok */
    public function listOrgSecrets(string $org, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListOrgSecrets()->call($org, $perPage, $page);
    }

    /** @return Schema\ActionsPublicKey */
    public function getOrgPublicKey(string $org): ActionsPublicKey|array
    {
        return $this->operators->actions👷GetOrgPublicKey()->call($org);
    }

    /** @return Schema\OrganizationActionsSecret */
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

    /** @return Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok */
    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|array
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

    /** @return Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok */
    public function listArtifactsForRepo(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListArtifactsForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\Artifact */
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

    /** @return iterable<string> */
    public function downloadArtifactStreaming(string $owner, string $repo, int $artifactId, string $archiveFormat): iterable
    {
        return $this->operators->actions👷DownloadArtifactStreaming()->call($owner, $repo, $artifactId, $archiveFormat);
    }

    /** @return Schema\Job */
    public function getJobForWorkflowRun(string $owner, string $repo, int $jobId): Job|array
    {
        return $this->operators->actions👷GetJobForWorkflowRun()->call($owner, $repo, $jobId);
    }

    /** @return array{code:int,location:string} */
    public function downloadJobLogsForWorkflowRun(string $owner, string $repo, int $jobId): array
    {
        return $this->operators->actions👷DownloadJobLogsForWorkflowRun()->call($owner, $repo, $jobId);
    }

    /** @return iterable<string> */
    public function downloadJobLogsForWorkflowRunStreaming(string $owner, string $repo, int $jobId): iterable
    {
        return $this->operators->actions👷DownloadJobLogsForWorkflowRunStreaming()->call($owner, $repo, $jobId);
    }

    /** @return Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok */
    public function listRepoOrganizationSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListRepoOrganizationSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\ActionsRepositoryPermissions */
    public function getGithubActionsPermissionsRepository(string $owner, string $repo): ActionsRepositoryPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsPermissionsRepository()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function setGithubActionsPermissionsRepository(string $owner, string $repo, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsPermissionsRepository()->call($owner, $repo, $params);
    }

    /** @return Schema\SelectedActions */
    public function getAllowedActionsRepository(string $owner, string $repo): SelectedActions|array
    {
        return $this->operators->actions👷GetAllowedActionsRepository()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function setAllowedActionsRepository(string $owner, string $repo, array $params): array
    {
        return $this->operators->actions👷SetAllowedActionsRepository()->call($owner, $repo, $params);
    }

    /** @return Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json */
    public function listSelfHostedRunnersForRepo(string $owner, string $repo, int $perPage, int $page): Json|array
    {
        return $this->operators->actions👷ListSelfHostedRunnersForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForRepo(string $owner, string $repo): iterable
    {
        return $this->operators->actions👷ListRunnerApplicationsForRepo()->call($owner, $repo);
    }

    /** @return Schema\AuthenticationToken */
    public function createRegistrationTokenForRepo(string $owner, string $repo): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRegistrationTokenForRepo()->call($owner, $repo);
    }

    /** @return Schema\AuthenticationToken */
    public function createRemoveTokenForRepo(string $owner, string $repo): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRemoveTokenForRepo()->call($owner, $repo);
    }

    /** @return Schema\Runner */
    public function getSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): Runner|array
    {
        return $this->operators->actions👷GetSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerFromRepo(string $owner, string $repo, int $runnerId): array
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerFromRepo()->call($owner, $repo, $runnerId);
    }

    /** @return Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok */
    public function listWorkflowRunsForRepo(string $owner, string $repo, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage, int $page, bool $excludePullRequests): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListWorkflowRunsForRepo()->call($owner, $repo, $actor, $branch, $event, $status, $created, $checkSuiteId, $headSha, $perPage, $page, $excludePullRequests);
    }

    /** @return Schema\WorkflowRun */
    public function getWorkflowRun(string $owner, string $repo, int $runId, bool $excludePullRequests): WorkflowRun|array
    {
        return $this->operators->actions👷GetWorkflowRun()->call($owner, $repo, $runId, $excludePullRequests);
    }

    /** @return array{code:int} */
    public function deleteWorkflowRun(string $owner, string $repo, int $runId): array
    {
        return $this->operators->actions👷DeleteWorkflowRun()->call($owner, $repo, $runId);
    }

    /** @return Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json */
    public function listWorkflowRunArtifacts(string $owner, string $repo, int $runId, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListWorkflowRunArtifacts()->call($owner, $repo, $runId, $perPage, $page);
    }

    /** @return Schema\WorkflowRun */
    public function getWorkflowRunAttempt(string $owner, string $repo, int $runId, int $attemptNumber, bool $excludePullRequests): WorkflowRun|array
    {
        return $this->operators->actions👷GetWorkflowRunAttempt()->call($owner, $repo, $runId, $attemptNumber, $excludePullRequests);
    }

    /** @return Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok */
    public function listJobsForWorkflowRunAttempt(string $owner, string $repo, int $runId, int $attemptNumber, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListJobsForWorkflowRunAttempt()->call($owner, $repo, $runId, $attemptNumber, $perPage, $page);
    }

    /** @return array{code:int,location:string} */
    public function downloadWorkflowRunAttemptLogs(string $owner, string $repo, int $runId, int $attemptNumber): array
    {
        return $this->operators->actions👷DownloadWorkflowRunAttemptLogs()->call($owner, $repo, $runId, $attemptNumber);
    }

    /** @return iterable<string> */
    public function downloadWorkflowRunAttemptLogsStreaming(string $owner, string $repo, int $runId, int $attemptNumber): iterable
    {
        return $this->operators->actions👷DownloadWorkflowRunAttemptLogsStreaming()->call($owner, $repo, $runId, $attemptNumber);
    }

    /** @return Schema\EmptyObject */
    public function cancelWorkflowRun(string $owner, string $repo, int $runId): EmptyObject|array
    {
        return $this->operators->actions👷CancelWorkflowRun()->call($owner, $repo, $runId);
    }

    /** @return Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json */
    public function listJobsForWorkflowRun(string $owner, string $repo, int $runId, string $filter, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListJobsForWorkflowRun()->call($owner, $repo, $runId, $filter, $perPage, $page);
    }

    /** @return array{code:int,location:string} */
    public function downloadWorkflowRunLogs(string $owner, string $repo, int $runId): array
    {
        return $this->operators->actions👷DownloadWorkflowRunLogs()->call($owner, $repo, $runId);
    }

    /** @return iterable<string> */
    public function downloadWorkflowRunLogsStreaming(string $owner, string $repo, int $runId): iterable
    {
        return $this->operators->actions👷DownloadWorkflowRunLogsStreaming()->call($owner, $repo, $runId);
    }

    /** @return array{code:int} */
    public function deleteWorkflowRunLogs(string $owner, string $repo, int $runId): array
    {
        return $this->operators->actions👷DeleteWorkflowRunLogs()->call($owner, $repo, $runId);
    }

    /** @return Schema\EmptyObject */
    public function reRunWorkflow(string $owner, string $repo, int $runId, array $params): EmptyObject|array
    {
        return $this->operators->actions👷ReRunWorkflow()->call($owner, $repo, $runId, $params);
    }

    /** @return Schema\WorkflowRunUsage */
    public function getWorkflowRunUsage(string $owner, string $repo, int $runId): WorkflowRunUsage|array
    {
        return $this->operators->actions👷GetWorkflowRunUsage()->call($owner, $repo, $runId);
    }

    /** @return Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json */
    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListRepoSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\ActionsPublicKey */
    public function getRepoPublicKey(string $owner, string $repo): ActionsPublicKey|array
    {
        return $this->operators->actions👷GetRepoPublicKey()->call($owner, $repo);
    }

    /** @return Schema\ActionsSecret */
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

    /** @return Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok */
    public function listRepoWorkflows(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListRepoWorkflows()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\Workflow */
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

    /** @return Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json */
    public function listWorkflowRuns(string $owner, string $repo, mixed $workflowId, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage, int $page, bool $excludePullRequests): \ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListWorkflowRuns()->call($owner, $repo, $workflowId, $actor, $branch, $event, $status, $created, $checkSuiteId, $headSha, $perPage, $page, $excludePullRequests);
    }

    /** @return Schema\WorkflowUsage */
    public function getWorkflowUsage(string $owner, string $repo, mixed $workflowId): WorkflowUsage|array
    {
        return $this->operators->actions👷GetWorkflowUsage()->call($owner, $repo, $workflowId);
    }
}
