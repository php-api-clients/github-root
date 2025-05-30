<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsCacheList;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsCacheUsageByRepository;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsCacheUsageOrgEnterprise;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsGetDefaultWorkflowPermissions;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsHostedRunner;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsHostedRunnerLimits;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsPublicKey;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsRepositoryPermissions;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsSecret;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsVariable;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsWorkflowAccessToRepository;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Artifact;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AuthenticationToken;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Job;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OidcCustomSubRepo;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GenerateRunnerJitconfigForEnterprise\Response\ApplicationJson\Created;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GetHostedRunnersPartnerImagesForEnterprise\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListHostedRunnersForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationActionsVariable;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Runner;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RunnerGroupsOrg;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SelectedActions;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Workflow;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\WorkflowRun;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\WorkflowRunUsage;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\WorkflowUsage;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Actions
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getActionsCacheUsageForEnterprise(string $enterprise): ActionsCacheUsageOrgEnterprise
    {
        return $this->operators->actions👷GetActionsCacheUsageForEnterprise()->call($enterprise);
    }

    /** @return */
    public function listHostedRunnersForEnterprise(string $enterprise, int $perPage, int $page): Ok
    {
        return $this->operators->actions👷ListHostedRunnersForEnterprise()->call($enterprise, $perPage, $page);
    }

    /** @return */
    public function createHostedRunnerForEnterprise(string $enterprise, array $params): ActionsHostedRunner
    {
        return $this->operators->actions👷CreateHostedRunnerForEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function getHostedRunnersGithubOwnedImagesForEnterprise(string $enterprise): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GetHostedRunnersGithubOwnedImagesForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷GetHostedRunnersGithubOwnedImagesForEnterprise()->call($enterprise);
    }

    /** @return */
    public function getHostedRunnersPartnerImagesForEnterprise(string $enterprise): Json
    {
        return $this->operators->actions👷GetHostedRunnersPartnerImagesForEnterprise()->call($enterprise);
    }

    /** @return */
    public function getHostedRunnersLimitsForEnterprise(string $enterprise): ActionsHostedRunnerLimits
    {
        return $this->operators->actions👷GetHostedRunnersLimitsForEnterprise()->call($enterprise);
    }

    /** @return */
    public function getHostedRunnersMachineSpecsForEnterprise(string $enterprise): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GetHostedRunnersMachineSpecsForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷GetHostedRunnersMachineSpecsForEnterprise()->call($enterprise);
    }

    /** @return */
    public function getHostedRunnersPlatformsForEnterprise(string $enterprise): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GetHostedRunnersPlatformsForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷GetHostedRunnersPlatformsForEnterprise()->call($enterprise);
    }

    /** @return */
    public function getHostedRunnerForEnterprise(string $enterprise, int $hostedRunnerId): ActionsHostedRunner
    {
        return $this->operators->actions👷GetHostedRunnerForEnterprise()->call($enterprise, $hostedRunnerId);
    }

    /** @return */
    public function deleteHostedRunnerForEnterprise(string $enterprise, int $hostedRunnerId): ActionsHostedRunner
    {
        return $this->operators->actions👷DeleteHostedRunnerForEnterprise()->call($enterprise, $hostedRunnerId);
    }

    /** @return */
    public function updateHostedRunnerForEnterprise(string $enterprise, int $hostedRunnerId, array $params): ActionsHostedRunner
    {
        return $this->operators->actions👷UpdateHostedRunnerForEnterprise()->call($enterprise, $hostedRunnerId, $params);
    }

    /** @return */
    public function setActionsOidcCustomIssuerPolicyForEnterprise(string $enterprise, array $params): WithoutBody
    {
        return $this->operators->actions👷SetActionsOidcCustomIssuerPolicyForEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function getGithubActionsDefaultWorkflowPermissionsEnterprise(string $enterprise): ActionsGetDefaultWorkflowPermissions
    {
        return $this->operators->actions👷GetGithubActionsDefaultWorkflowPermissionsEnterprise()->call($enterprise);
    }

    /** @return */
    public function setGithubActionsDefaultWorkflowPermissionsEnterprise(string $enterprise, array $params): WithoutBody
    {
        return $this->operators->actions👷SetGithubActionsDefaultWorkflowPermissionsEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function generateRunnerJitconfigForEnterprise(string $enterprise, array $params): Created
    {
        return $this->operators->actions👷GenerateRunnerJitconfigForEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function getActionsCacheUsageForOrg(string $org): ActionsCacheUsageOrgEnterprise
    {
        return $this->operators->actions👷GetActionsCacheUsageForOrg()->call($org);
    }

    /** @return */
    public function getActionsCacheUsageByRepoForOrg(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷GetActionsCacheUsageByRepoForOrg()->call($org, $perPage, $page);
    }

    /** @return */
    public function listHostedRunnersForOrg(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListHostedRunnersForOrg\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListHostedRunnersForOrg()->call($org, $perPage, $page);
    }

    /** @return */
    public function createHostedRunnerForOrg(string $org, array $params): ActionsHostedRunner
    {
        return $this->operators->actions👷CreateHostedRunnerForOrg()->call($org, $params);
    }

    /** @return */
    public function getHostedRunnersGithubOwnedImagesForOrg(string $org): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GetHostedRunnersGithubOwnedImagesForOrg\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷GetHostedRunnersGithubOwnedImagesForOrg()->call($org);
    }

    /** @return */
    public function getHostedRunnersPartnerImagesForOrg(string $org): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GetHostedRunnersPartnerImagesForOrg\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷GetHostedRunnersPartnerImagesForOrg()->call($org);
    }

    /** @return */
    public function getHostedRunnersLimitsForOrg(string $org): ActionsHostedRunnerLimits
    {
        return $this->operators->actions👷GetHostedRunnersLimitsForOrg()->call($org);
    }

    /** @return */
    public function getHostedRunnersMachineSpecsForOrg(string $org): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GetHostedRunnersMachineSpecsForOrg\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷GetHostedRunnersMachineSpecsForOrg()->call($org);
    }

    /** @return */
    public function getHostedRunnersPlatformsForOrg(string $org): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GetHostedRunnersPlatformsForOrg\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷GetHostedRunnersPlatformsForOrg()->call($org);
    }

    /** @return */
    public function getHostedRunnerForOrg(string $org, int $hostedRunnerId): ActionsHostedRunner
    {
        return $this->operators->actions👷GetHostedRunnerForOrg()->call($org, $hostedRunnerId);
    }

    /** @return */
    public function deleteHostedRunnerForOrg(string $org, int $hostedRunnerId): ActionsHostedRunner
    {
        return $this->operators->actions👷DeleteHostedRunnerForOrg()->call($org, $hostedRunnerId);
    }

    /** @return */
    public function updateHostedRunnerForOrg(string $org, int $hostedRunnerId, array $params): ActionsHostedRunner
    {
        return $this->operators->actions👷UpdateHostedRunnerForOrg()->call($org, $hostedRunnerId, $params);
    }

    /** @return */
    public function getGithubActionsPermissionsOrganization(string $org): ActionsOrganizationPermissions
    {
        return $this->operators->actions👷GetGithubActionsPermissionsOrganization()->call($org);
    }

    /** @return */
    public function setGithubActionsPermissionsOrganization(string $org, array $params): WithoutBody
    {
        return $this->operators->actions👷SetGithubActionsPermissionsOrganization()->call($org, $params);
    }

    /** @return */
    public function listSelectedRepositoriesEnabledGithubActionsOrganization(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization()->call($org, $perPage, $page);
    }

    /** @return */
    public function setSelectedRepositoriesEnabledGithubActionsOrganization(string $org, array $params): WithoutBody
    {
        return $this->operators->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization()->call($org, $params);
    }

    /** @return */
    public function enableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷EnableSelectedRepositoryGithubActionsOrganization()->call($org, $repositoryId);
    }

    /** @return */
    public function disableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷DisableSelectedRepositoryGithubActionsOrganization()->call($org, $repositoryId);
    }

    /** @return */
    public function getAllowedActionsOrganization(string $org): SelectedActions
    {
        return $this->operators->actions👷GetAllowedActionsOrganization()->call($org);
    }

    /** @return */
    public function setAllowedActionsOrganization(string $org, array $params): WithoutBody
    {
        return $this->operators->actions👷SetAllowedActionsOrganization()->call($org, $params);
    }

    /** @return */
    public function getGithubActionsDefaultWorkflowPermissionsOrganization(string $org): ActionsGetDefaultWorkflowPermissions
    {
        return $this->operators->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization()->call($org);
    }

    /** @return */
    public function setGithubActionsDefaultWorkflowPermissionsOrganization(string $org, array $params): WithoutBody
    {
        return $this->operators->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization()->call($org, $params);
    }

    /** @return */
    public function listSelfHostedRunnerGroupsForOrg(string $org, string $visibleToRepository, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListSelfHostedRunnerGroupsForOrg()->call($org, $visibleToRepository, $perPage, $page);
    }

    /** @return */
    public function createSelfHostedRunnerGroupForOrg(string $org, array $params): RunnerGroupsOrg
    {
        return $this->operators->actions👷CreateSelfHostedRunnerGroupForOrg()->call($org, $params);
    }

    /** @return */
    public function getSelfHostedRunnerGroupForOrg(string $org, int $runnerGroupId): RunnerGroupsOrg
    {
        return $this->operators->actions👷GetSelfHostedRunnerGroupForOrg()->call($org, $runnerGroupId);
    }

    /** @return */
    public function deleteSelfHostedRunnerGroupFromOrg(string $org, int $runnerGroupId): WithoutBody
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerGroupFromOrg()->call($org, $runnerGroupId);
    }

    /** @return */
    public function updateSelfHostedRunnerGroupForOrg(string $org, int $runnerGroupId, array $params): RunnerGroupsOrg
    {
        return $this->operators->actions👷UpdateSelfHostedRunnerGroupForOrg()->call($org, $runnerGroupId, $params);
    }

    /** @return */
    public function listGithubHostedRunnersInGroupForOrg(string $org, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListGithubHostedRunnersInGroupForOrg\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListGithubHostedRunnersInGroupForOrg()->call($org, $runnerGroupId, $perPage, $page);
    }

    /** @return */
    public function listRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $page, int $perPage): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $page, $perPage);
    }

    /** @return */
    public function setRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, array $params): WithoutBody
    {
        return $this->operators->actions👷SetRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $params);
    }

    /** @return */
    public function addRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷AddRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $repositoryId);
    }

    /** @return */
    public function removeRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷RemoveRepoAccessToSelfHostedRunnerGroupInOrg()->call($org, $runnerGroupId, $repositoryId);
    }

    /** @return */
    public function listSelfHostedRunnersInGroupForOrg(string $org, int $runnerGroupId, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelfHostedRunnersInGroupForOrg\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListSelfHostedRunnersInGroupForOrg()->call($org, $runnerGroupId, $perPage, $page);
    }

    /** @return */
    public function setSelfHostedRunnersInGroupForOrg(string $org, int $runnerGroupId, array $params): WithoutBody
    {
        return $this->operators->actions👷SetSelfHostedRunnersInGroupForOrg()->call($org, $runnerGroupId, $params);
    }

    /** @return */
    public function addSelfHostedRunnerToGroupForOrg(string $org, int $runnerGroupId, int $runnerId): WithoutBody
    {
        return $this->operators->actions👷AddSelfHostedRunnerToGroupForOrg()->call($org, $runnerGroupId, $runnerId);
    }

    /** @return */
    public function removeSelfHostedRunnerFromGroupForOrg(string $org, int $runnerGroupId, int $runnerId): WithoutBody
    {
        return $this->operators->actions👷RemoveSelfHostedRunnerFromGroupForOrg()->call($org, $runnerGroupId, $runnerId);
    }

    /** @return */
    public function listSelfHostedRunnersForOrg(string $name, string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListSelfHostedRunnersForOrg()->call($name, $org, $perPage, $page);
    }

    /** @return Observable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForOrg(string $org): iterable
    {
        return $this->operators->actions👷ListRunnerApplicationsForOrg()->call($org);
    }

    /** @return */
    public function generateRunnerJitconfigForOrg(string $org, array $params): Created
    {
        return $this->operators->actions👷GenerateRunnerJitconfigForOrg()->call($org, $params);
    }

    /** @return */
    public function createRegistrationTokenForOrg(string $org): AuthenticationToken
    {
        return $this->operators->actions👷CreateRegistrationTokenForOrg()->call($org);
    }

    /** @return */
    public function createRemoveTokenForOrg(string $org): AuthenticationToken
    {
        return $this->operators->actions👷CreateRemoveTokenForOrg()->call($org);
    }

    /** @return */
    public function getSelfHostedRunnerForOrg(string $org, int $runnerId): Runner
    {
        return $this->operators->actions👷GetSelfHostedRunnerForOrg()->call($org, $runnerId);
    }

    /** @return */
    public function deleteSelfHostedRunnerFromOrg(string $org, int $runnerId): WithoutBody
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerFromOrg()->call($org, $runnerId);
    }

    /** @return */
    public function listLabelsForSelfHostedRunnerForOrg(string $org, int $runnerId): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListLabelsForSelfHostedRunnerForOrg()->call($org, $runnerId);
    }

    /** @return */
    public function setCustomLabelsForSelfHostedRunnerForOrg(string $org, int $runnerId, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷SetCustomLabelsForSelfHostedRunnerForOrg()->call($org, $runnerId, $params);
    }

    /** @return */
    public function addCustomLabelsToSelfHostedRunnerForOrg(string $org, int $runnerId, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷AddCustomLabelsToSelfHostedRunnerForOrg()->call($org, $runnerId, $params);
    }

    /** @return */
    public function removeAllCustomLabelsFromSelfHostedRunnerForOrg(string $org, int $runnerId): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg()->call($org, $runnerId);
    }

    /** @return */
    public function removeCustomLabelFromSelfHostedRunnerForOrg(string $org, int $runnerId, string $name): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg()->call($org, $runnerId, $name);
    }

    /** @return */
    public function listOrgSecrets(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListOrgSecrets()->call($org, $perPage, $page);
    }

    /** @return */
    public function getOrgPublicKey(string $org): ActionsPublicKey
    {
        return $this->operators->actions👷GetOrgPublicKey()->call($org);
    }

    /** @return */
    public function getOrgSecret(string $org, string $secretName): OrganizationActionsSecret
    {
        return $this->operators->actions👷GetOrgSecret()->call($org, $secretName);
    }

    /** @return */
    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): EmptyObject|WithoutBody
    {
        return $this->operators->actions👷CreateOrUpdateOrgSecret()->call($org, $secretName, $params);
    }

    /** @return */
    public function deleteOrgSecret(string $org, string $secretName): WithoutBody
    {
        return $this->operators->actions👷DeleteOrgSecret()->call($org, $secretName);
    }

    /** @return */
    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListSelectedReposForOrgSecret()->call($org, $secretName, $page, $perPage);
    }

    /** @return */
    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): WithoutBody
    {
        return $this->operators->actions👷SetSelectedReposForOrgSecret()->call($org, $secretName, $params);
    }

    /** @return */
    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷AddSelectedRepoToOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return */
    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷RemoveSelectedRepoFromOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return */
    public function listOrgVariables(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListOrgVariables()->call($org, $perPage, $page);
    }

    /** @return */
    public function createOrgVariable(string $org, array $params): EmptyObject
    {
        return $this->operators->actions👷CreateOrgVariable()->call($org, $params);
    }

    /** @return */
    public function getOrgVariable(string $org, string $name): OrganizationActionsVariable
    {
        return $this->operators->actions👷GetOrgVariable()->call($org, $name);
    }

    /** @return */
    public function deleteOrgVariable(string $org, string $name): WithoutBody
    {
        return $this->operators->actions👷DeleteOrgVariable()->call($org, $name);
    }

    /** @return */
    public function updateOrgVariable(string $org, string $name, array $params): WithoutBody
    {
        return $this->operators->actions👷UpdateOrgVariable()->call($org, $name, $params);
    }

    /** @return */
    public function listSelectedReposForOrgVariable(string $org, string $name, int $page, int $perPage): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|WithoutBody
    {
        return $this->operators->actions👷ListSelectedReposForOrgVariable()->call($org, $name, $page, $perPage);
    }

    /** @return */
    public function setSelectedReposForOrgVariable(string $org, string $name, array $params): WithoutBody
    {
        return $this->operators->actions👷SetSelectedReposForOrgVariable()->call($org, $name, $params);
    }

    /** @return */
    public function addSelectedRepoToOrgVariable(string $org, string $name, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷AddSelectedRepoToOrgVariable()->call($org, $name, $repositoryId);
    }

    /** @return */
    public function removeSelectedRepoFromOrgVariable(string $org, string $name, int $repositoryId): WithoutBody
    {
        return $this->operators->actions👷RemoveSelectedRepoFromOrgVariable()->call($org, $name, $repositoryId);
    }

    /** @return */
    public function listArtifactsForRepo(string $owner, string $repo, string $name, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListArtifactsForRepo()->call($owner, $repo, $name, $perPage, $page);
    }

    /** @return */
    public function getArtifact(string $owner, string $repo, int $artifactId): Artifact
    {
        return $this->operators->actions👷GetArtifact()->call($owner, $repo, $artifactId);
    }

    /** @return */
    public function deleteArtifact(string $owner, string $repo, int $artifactId): WithoutBody
    {
        return $this->operators->actions👷DeleteArtifact()->call($owner, $repo, $artifactId);
    }

    /** @return */
    public function downloadArtifact(string $owner, string $repo, int $artifactId, string $archiveFormat): WithoutBody
    {
        return $this->operators->actions👷DownloadArtifact()->call($owner, $repo, $artifactId, $archiveFormat);
    }

    /** @return Observable<string> */
    public function downloadArtifactStreaming(string $owner, string $repo, int $artifactId, string $archiveFormat): iterable
    {
        return $this->operators->actions👷DownloadArtifactStreaming()->call($owner, $repo, $artifactId, $archiveFormat);
    }

    /** @return */
    public function getActionsCacheUsage(string $owner, string $repo): ActionsCacheUsageByRepository
    {
        return $this->operators->actions👷GetActionsCacheUsage()->call($owner, $repo);
    }

    /** @return */
    public function getActionsCacheList(string $owner, string $repo, string $ref, string $key, int $perPage, int $page, string $sort, string $direction): ActionsCacheList
    {
        return $this->operators->actions👷GetActionsCacheList()->call($owner, $repo, $ref, $key, $perPage, $page, $sort, $direction);
    }

    /** @return */
    public function deleteActionsCacheByKey(string $owner, string $repo, string $key, string $ref): ActionsCacheList
    {
        return $this->operators->actions👷DeleteActionsCacheByKey()->call($owner, $repo, $key, $ref);
    }

    /** @return */
    public function deleteActionsCacheById(string $owner, string $repo, int $cacheId): WithoutBody
    {
        return $this->operators->actions👷DeleteActionsCacheById()->call($owner, $repo, $cacheId);
    }

    /** @return */
    public function getJobForWorkflowRun(string $owner, string $repo, int $jobId): Job
    {
        return $this->operators->actions👷GetJobForWorkflowRun()->call($owner, $repo, $jobId);
    }

    /** @return */
    public function downloadJobLogsForWorkflowRun(string $owner, string $repo, int $jobId): WithoutBody
    {
        return $this->operators->actions👷DownloadJobLogsForWorkflowRun()->call($owner, $repo, $jobId);
    }

    /** @return Observable<string> */
    public function downloadJobLogsForWorkflowRunStreaming(string $owner, string $repo, int $jobId): iterable
    {
        return $this->operators->actions👷DownloadJobLogsForWorkflowRunStreaming()->call($owner, $repo, $jobId);
    }

    /** @return */
    public function reRunJobForWorkflowRun(string $owner, string $repo, int $jobId, array $params): EmptyObject
    {
        return $this->operators->actions👷ReRunJobForWorkflowRun()->call($owner, $repo, $jobId, $params);
    }

    /** @return */
    public function getCustomOidcSubClaimForRepo(string $owner, string $repo): OidcCustomSubRepo
    {
        return $this->operators->actions👷GetCustomOidcSubClaimForRepo()->call($owner, $repo);
    }

    /** @return */
    public function setCustomOidcSubClaimForRepo(string $owner, string $repo, array $params): EmptyObject
    {
        return $this->operators->actions👷SetCustomOidcSubClaimForRepo()->call($owner, $repo, $params);
    }

    /** @return */
    public function listRepoOrganizationSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListRepoOrganizationSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function listRepoOrganizationVariables(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListRepoOrganizationVariables()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getGithubActionsPermissionsRepository(string $owner, string $repo): ActionsRepositoryPermissions
    {
        return $this->operators->actions👷GetGithubActionsPermissionsRepository()->call($owner, $repo);
    }

    /** @return */
    public function setGithubActionsPermissionsRepository(string $owner, string $repo, array $params): WithoutBody
    {
        return $this->operators->actions👷SetGithubActionsPermissionsRepository()->call($owner, $repo, $params);
    }

    /** @return */
    public function getWorkflowAccessToRepository(string $owner, string $repo): ActionsWorkflowAccessToRepository
    {
        return $this->operators->actions👷GetWorkflowAccessToRepository()->call($owner, $repo);
    }

    /** @return */
    public function setWorkflowAccessToRepository(string $owner, string $repo, array $params): WithoutBody
    {
        return $this->operators->actions👷SetWorkflowAccessToRepository()->call($owner, $repo, $params);
    }

    /** @return */
    public function getAllowedActionsRepository(string $owner, string $repo): SelectedActions
    {
        return $this->operators->actions👷GetAllowedActionsRepository()->call($owner, $repo);
    }

    /** @return */
    public function setAllowedActionsRepository(string $owner, string $repo, array $params): WithoutBody
    {
        return $this->operators->actions👷SetAllowedActionsRepository()->call($owner, $repo, $params);
    }

    /** @return */
    public function getGithubActionsDefaultWorkflowPermissionsRepository(string $owner, string $repo): ActionsGetDefaultWorkflowPermissions
    {
        return $this->operators->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository()->call($owner, $repo);
    }

    /** @return */
    public function setGithubActionsDefaultWorkflowPermissionsRepository(string $owner, string $repo, array $params): WithoutBody
    {
        return $this->operators->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository()->call($owner, $repo, $params);
    }

    /** @return */
    public function listSelfHostedRunnersForRepo(string $name, string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListSelfHostedRunnersForRepo()->call($name, $owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForRepo(string $owner, string $repo): iterable
    {
        return $this->operators->actions👷ListRunnerApplicationsForRepo()->call($owner, $repo);
    }

    /** @return */
    public function generateRunnerJitconfigForRepo(string $owner, string $repo, array $params): Created
    {
        return $this->operators->actions👷GenerateRunnerJitconfigForRepo()->call($owner, $repo, $params);
    }

    /** @return */
    public function createRegistrationTokenForRepo(string $owner, string $repo): AuthenticationToken
    {
        return $this->operators->actions👷CreateRegistrationTokenForRepo()->call($owner, $repo);
    }

    /** @return */
    public function createRemoveTokenForRepo(string $owner, string $repo): AuthenticationToken
    {
        return $this->operators->actions👷CreateRemoveTokenForRepo()->call($owner, $repo);
    }

    /** @return */
    public function getSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): Runner
    {
        return $this->operators->actions👷GetSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId);
    }

    /** @return */
    public function deleteSelfHostedRunnerFromRepo(string $owner, string $repo, int $runnerId): WithoutBody
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerFromRepo()->call($owner, $repo, $runnerId);
    }

    /** @return */
    public function listLabelsForSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListLabelsForSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId);
    }

    /** @return */
    public function setCustomLabelsForSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷SetCustomLabelsForSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId, $params);
    }

    /** @return */
    public function addCustomLabelsToSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷AddCustomLabelsToSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId, $params);
    }

    /** @return */
    public function removeAllCustomLabelsFromSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId);
    }

    /** @return */
    public function removeCustomLabelFromSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, string $name): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId, $name);
    }

    /** @return */
    public function listWorkflowRunsForRepo(string $owner, string $repo, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage, int $page, bool $excludePullRequests): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListWorkflowRunsForRepo()->call($owner, $repo, $actor, $branch, $event, $status, $created, $checkSuiteId, $headSha, $perPage, $page, $excludePullRequests);
    }

    /** @return */
    public function getWorkflowRun(string $owner, string $repo, int $runId, bool $excludePullRequests): WorkflowRun
    {
        return $this->operators->actions👷GetWorkflowRun()->call($owner, $repo, $runId, $excludePullRequests);
    }

    /** @return */
    public function deleteWorkflowRun(string $owner, string $repo, int $runId): WithoutBody
    {
        return $this->operators->actions👷DeleteWorkflowRun()->call($owner, $repo, $runId);
    }

    /** @return Observable<Schema\EnvironmentApprovals> */
    public function getReviewsForRun(string $owner, string $repo, int $runId): iterable
    {
        return $this->operators->actions👷GetReviewsForRun()->call($owner, $repo, $runId);
    }

    /** @return */
    public function approveWorkflowRun(string $owner, string $repo, int $runId): EmptyObject
    {
        return $this->operators->actions👷ApproveWorkflowRun()->call($owner, $repo, $runId);
    }

    /** @return */
    public function listWorkflowRunArtifacts(string $owner, string $repo, int $runId, string $name, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListWorkflowRunArtifacts()->call($owner, $repo, $runId, $name, $perPage, $page);
    }

    /** @return */
    public function getWorkflowRunAttempt(string $owner, string $repo, int $runId, int $attemptNumber, bool $excludePullRequests): WorkflowRun
    {
        return $this->operators->actions👷GetWorkflowRunAttempt()->call($owner, $repo, $runId, $attemptNumber, $excludePullRequests);
    }

    /** @return */
    public function listJobsForWorkflowRunAttempt(string $owner, string $repo, int $runId, int $attemptNumber, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListJobsForWorkflowRunAttempt()->call($owner, $repo, $runId, $attemptNumber, $perPage, $page);
    }

    /** @return */
    public function downloadWorkflowRunAttemptLogs(string $owner, string $repo, int $runId, int $attemptNumber): WithoutBody
    {
        return $this->operators->actions👷DownloadWorkflowRunAttemptLogs()->call($owner, $repo, $runId, $attemptNumber);
    }

    /** @return Observable<string> */
    public function downloadWorkflowRunAttemptLogsStreaming(string $owner, string $repo, int $runId, int $attemptNumber): iterable
    {
        return $this->operators->actions👷DownloadWorkflowRunAttemptLogsStreaming()->call($owner, $repo, $runId, $attemptNumber);
    }

    /** @return */
    public function cancelWorkflowRun(string $owner, string $repo, int $runId): EmptyObject
    {
        return $this->operators->actions👷CancelWorkflowRun()->call($owner, $repo, $runId);
    }

    /** @return */
    public function reviewCustomGatesForRun(string $owner, string $repo, int $runId, array $params): WithoutBody
    {
        return $this->operators->actions👷ReviewCustomGatesForRun()->call($owner, $repo, $runId, $params);
    }

    /** @return */
    public function forceCancelWorkflowRun(string $owner, string $repo, int $runId): EmptyObject
    {
        return $this->operators->actions👷ForceCancelWorkflowRun()->call($owner, $repo, $runId);
    }

    /** @return */
    public function listJobsForWorkflowRun(string $owner, string $repo, int $runId, string $filter, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListJobsForWorkflowRun()->call($owner, $repo, $runId, $filter, $perPage, $page);
    }

    /** @return */
    public function downloadWorkflowRunLogs(string $owner, string $repo, int $runId): WithoutBody
    {
        return $this->operators->actions👷DownloadWorkflowRunLogs()->call($owner, $repo, $runId);
    }

    /** @return Observable<string> */
    public function downloadWorkflowRunLogsStreaming(string $owner, string $repo, int $runId): iterable
    {
        return $this->operators->actions👷DownloadWorkflowRunLogsStreaming()->call($owner, $repo, $runId);
    }

    /** @return */
    public function deleteWorkflowRunLogs(string $owner, string $repo, int $runId): WithoutBody
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
    public function reRunWorkflow(string $owner, string $repo, int $runId, array $params): EmptyObject
    {
        return $this->operators->actions👷ReRunWorkflow()->call($owner, $repo, $runId, $params);
    }

    /** @return */
    public function reRunWorkflowFailedJobs(string $owner, string $repo, int $runId, array $params): EmptyObject
    {
        return $this->operators->actions👷ReRunWorkflowFailedJobs()->call($owner, $repo, $runId, $params);
    }

    /** @return */
    public function getWorkflowRunUsage(string $owner, string $repo, int $runId): WorkflowRunUsage
    {
        return $this->operators->actions👷GetWorkflowRunUsage()->call($owner, $repo, $runId);
    }

    /** @return */
    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListRepoSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getRepoPublicKey(string $owner, string $repo): ActionsPublicKey
    {
        return $this->operators->actions👷GetRepoPublicKey()->call($owner, $repo);
    }

    /** @return */
    public function getRepoSecret(string $owner, string $repo, string $secretName): ActionsSecret
    {
        return $this->operators->actions👷GetRepoSecret()->call($owner, $repo, $secretName);
    }

    /** @return */
    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): EmptyObject|WithoutBody
    {
        return $this->operators->actions👷CreateOrUpdateRepoSecret()->call($owner, $repo, $secretName, $params);
    }

    /** @return */
    public function deleteRepoSecret(string $owner, string $repo, string $secretName): WithoutBody
    {
        return $this->operators->actions👷DeleteRepoSecret()->call($owner, $repo, $secretName);
    }

    /** @return */
    public function listRepoVariables(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListRepoVariables()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function createRepoVariable(string $owner, string $repo, array $params): EmptyObject
    {
        return $this->operators->actions👷CreateRepoVariable()->call($owner, $repo, $params);
    }

    /** @return */
    public function getRepoVariable(string $owner, string $repo, string $name): ActionsVariable
    {
        return $this->operators->actions👷GetRepoVariable()->call($owner, $repo, $name);
    }

    /** @return */
    public function deleteRepoVariable(string $owner, string $repo, string $name): WithoutBody
    {
        return $this->operators->actions👷DeleteRepoVariable()->call($owner, $repo, $name);
    }

    /** @return */
    public function updateRepoVariable(string $owner, string $repo, string $name, array $params): WithoutBody
    {
        return $this->operators->actions👷UpdateRepoVariable()->call($owner, $repo, $name, $params);
    }

    /** @return */
    public function listRepoWorkflows(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok
    {
        return $this->operators->actions👷ListRepoWorkflows()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getWorkflow(string $owner, string $repo, mixed $workflowId): Workflow
    {
        return $this->operators->actions👷GetWorkflow()->call($owner, $repo, $workflowId);
    }

    /** @return */
    public function disableWorkflow(string $owner, string $repo, mixed $workflowId): WithoutBody
    {
        return $this->operators->actions👷DisableWorkflow()->call($owner, $repo, $workflowId);
    }

    /** @return */
    public function createWorkflowDispatch(string $owner, string $repo, mixed $workflowId, array $params): WithoutBody
    {
        return $this->operators->actions👷CreateWorkflowDispatch()->call($owner, $repo, $workflowId, $params);
    }

    /** @return */
    public function enableWorkflow(string $owner, string $repo, mixed $workflowId): WithoutBody
    {
        return $this->operators->actions👷EnableWorkflow()->call($owner, $repo, $workflowId);
    }

    /** @return */
    public function listWorkflowRuns(string $owner, string $repo, mixed $workflowId, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage, int $page, bool $excludePullRequests): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListWorkflowRuns()->call($owner, $repo, $workflowId, $actor, $branch, $event, $status, $created, $checkSuiteId, $headSha, $perPage, $page, $excludePullRequests);
    }

    /** @return */
    public function getWorkflowUsage(string $owner, string $repo, mixed $workflowId): WorkflowUsage
    {
        return $this->operators->actions👷GetWorkflowUsage()->call($owner, $repo, $workflowId);
    }

    /** @return */
    public function listEnvironmentSecrets(string $owner, string $repo, string $environmentName, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListEnvironmentSecrets()->call($owner, $repo, $environmentName, $perPage, $page);
    }

    /** @return */
    public function getEnvironmentPublicKey(string $owner, string $repo, string $environmentName): ActionsPublicKey
    {
        return $this->operators->actions👷GetEnvironmentPublicKey()->call($owner, $repo, $environmentName);
    }

    /** @return */
    public function getEnvironmentSecret(string $owner, string $repo, string $environmentName, string $secretName): ActionsSecret
    {
        return $this->operators->actions👷GetEnvironmentSecret()->call($owner, $repo, $environmentName, $secretName);
    }

    /** @return */
    public function createOrUpdateEnvironmentSecret(string $owner, string $repo, string $environmentName, string $secretName, array $params): EmptyObject|WithoutBody
    {
        return $this->operators->actions👷CreateOrUpdateEnvironmentSecret()->call($owner, $repo, $environmentName, $secretName, $params);
    }

    /** @return */
    public function deleteEnvironmentSecret(string $owner, string $repo, string $environmentName, string $secretName): WithoutBody
    {
        return $this->operators->actions👷DeleteEnvironmentSecret()->call($owner, $repo, $environmentName, $secretName);
    }

    /** @return */
    public function listEnvironmentVariables(string $owner, string $repo, string $environmentName, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListEnvironmentVariables\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->actions👷ListEnvironmentVariables()->call($owner, $repo, $environmentName, $perPage, $page);
    }

    /** @return */
    public function createEnvironmentVariable(string $owner, string $repo, string $environmentName, array $params): EmptyObject
    {
        return $this->operators->actions👷CreateEnvironmentVariable()->call($owner, $repo, $environmentName, $params);
    }

    /** @return */
    public function getEnvironmentVariable(string $owner, string $repo, string $environmentName, string $name): ActionsVariable
    {
        return $this->operators->actions👷GetEnvironmentVariable()->call($owner, $repo, $environmentName, $name);
    }

    /** @return */
    public function deleteEnvironmentVariable(string $owner, string $repo, string $name, string $environmentName): WithoutBody
    {
        return $this->operators->actions👷DeleteEnvironmentVariable()->call($owner, $repo, $name, $environmentName);
    }

    /** @return */
    public function updateEnvironmentVariable(string $owner, string $repo, string $name, string $environmentName, array $params): WithoutBody
    {
        return $this->operators->actions👷UpdateEnvironmentVariable()->call($owner, $repo, $name, $environmentName, $params);
    }
}
