<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Actions
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getGithubActionsPermissionsOrganization(string $org): Schema\ActionsOrganizationPermissions
    {
        if (array_key_exists(Operator\Actions\GetGithubActionsPermissionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetGithubActionsPermissionsOrganization::class] = new Operator\Actions\GetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\Actions\GetGithubActionsPermissionsOrganization::class]->call($org);
    }

    public function setGithubActionsPermissionsOrganization(string $org, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\SetGithubActionsPermissionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetGithubActionsPermissionsOrganization::class] = new Operator\Actions\SetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\Actions\SetGithubActionsPermissionsOrganization::class]->call($org, $params);
    }

    public function listSelectedRepositoriesEnabledGithubActionsOrganization(string $org, int $perPage, int $page): Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization::class] = new Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories());
        }

        return $this->operator[Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization::class]->call($org, $perPage, $page);
    }

    public function setSelectedRepositoriesEnabledGithubActionsOrganization(string $org, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization::class] = new Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories());
        }

        return $this->operator[Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization::class]->call($org, $params);
    }

    public function enableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization::class] = new Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization::class]->call($org, $repositoryId);
    }

    public function disableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization::class] = new Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization::class]->call($org, $repositoryId);
    }

    public function getAllowedActionsOrganization(string $org): Schema\SelectedActions
    {
        if (array_key_exists(Operator\Actions\GetAllowedActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetAllowedActionsOrganization::class] = new Operator\Actions\GetAllowedActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\Actions\GetAllowedActionsOrganization::class]->call($org);
    }

    public function setAllowedActionsOrganization(string $org, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\SetAllowedActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetAllowedActionsOrganization::class] = new Operator\Actions\SetAllowedActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\Actions\SetAllowedActionsOrganization::class]->call($org, $params);
    }

    public function listSelfHostedRunnerGroupsForOrg(string $org, int $perPage, int $page): Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListSelfHostedRunnerGroupsForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListSelfHostedRunnerGroupsForOrg::class] = new Operator\Actions\ListSelfHostedRunnerGroupsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups());
        }

        return $this->operator[Operator\Actions\ListSelfHostedRunnerGroupsForOrg::class]->call($org, $perPage, $page);
    }

    public function createSelfHostedRunnerGroupForOrg(string $org, array $params): Schema\RunnerGroupsOrg
    {
        if (array_key_exists(Operator\Actions\CreateSelfHostedRunnerGroupForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateSelfHostedRunnerGroupForOrg::class] = new Operator\Actions\CreateSelfHostedRunnerGroupForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups());
        }

        return $this->operator[Operator\Actions\CreateSelfHostedRunnerGroupForOrg::class]->call($org, $params);
    }

    public function getSelfHostedRunnerGroupForOrg(string $org, int $runnerGroupId): Schema\RunnerGroupsOrg
    {
        if (array_key_exists(Operator\Actions\GetSelfHostedRunnerGroupForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetSelfHostedRunnerGroupForOrg::class] = new Operator\Actions\GetSelfHostedRunnerGroupForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\Actions\GetSelfHostedRunnerGroupForOrg::class]->call($org, $runnerGroupId);
    }

    public function deleteSelfHostedRunnerGroupFromOrg(string $org, int $runnerGroupId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteSelfHostedRunnerGroupFromOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteSelfHostedRunnerGroupFromOrg::class] = new Operator\Actions\DeleteSelfHostedRunnerGroupFromOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\Actions\DeleteSelfHostedRunnerGroupFromOrg::class]->call($org, $runnerGroupId);
    }

    public function updateSelfHostedRunnerGroupForOrg(string $org, int $runnerGroupId, array $params): Schema\RunnerGroupsOrg
    {
        if (array_key_exists(Operator\Actions\UpdateSelfHostedRunnerGroupForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\UpdateSelfHostedRunnerGroupForOrg::class] = new Operator\Actions\UpdateSelfHostedRunnerGroupForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\Actions\UpdateSelfHostedRunnerGroupForOrg::class]->call($org, $runnerGroupId, $params);
    }

    public function listRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $page, int $perPage): Schema\Operations\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg::class] = new Operator\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories());
        }

        return $this->operator[Operator\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg::class]->call($org, $runnerGroupId, $page, $perPage);
    }

    public function setRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg::class] = new Operator\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories());
        }

        return $this->operator[Operator\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg::class]->call($org, $runnerGroupId, $params);
    }

    public function addRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $repositoryId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrg::class] = new Operator\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrg::class]->call($org, $runnerGroupId, $repositoryId);
    }

    public function removeRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runnerGroupId, int $repositoryId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg::class] = new Operator\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg::class]->call($org, $runnerGroupId, $repositoryId);
    }

    public function listSelfHostedRunnersInGroupForOrg(string $org, int $runnerGroupId, int $perPage, int $page): Schema\Operations\Actions\ListSelfHostedRunnersInGroupForOrg\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListSelfHostedRunnersInGroupForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListSelfHostedRunnersInGroupForOrg::class] = new Operator\Actions\ListSelfHostedRunnersInGroupForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());
        }

        return $this->operator[Operator\Actions\ListSelfHostedRunnersInGroupForOrg::class]->call($org, $runnerGroupId, $perPage, $page);
    }

    public function setSelfHostedRunnersInGroupForOrg(string $org, int $runnerGroupId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\SetSelfHostedRunnersInGroupForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetSelfHostedRunnersInGroupForOrg::class] = new Operator\Actions\SetSelfHostedRunnersInGroupForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());
        }

        return $this->operator[Operator\Actions\SetSelfHostedRunnersInGroupForOrg::class]->call($org, $runnerGroupId, $params);
    }

    public function addSelfHostedRunnerToGroupForOrg(string $org, int $runnerGroupId, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\AddSelfHostedRunnerToGroupForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\AddSelfHostedRunnerToGroupForOrg::class] = new Operator\Actions\AddSelfHostedRunnerToGroupForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\Actions\AddSelfHostedRunnerToGroupForOrg::class]->call($org, $runnerGroupId, $runnerId);
    }

    public function removeSelfHostedRunnerFromGroupForOrg(string $org, int $runnerGroupId, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\RemoveSelfHostedRunnerFromGroupForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\RemoveSelfHostedRunnerFromGroupForOrg::class] = new Operator\Actions\RemoveSelfHostedRunnerFromGroupForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\Actions\RemoveSelfHostedRunnerFromGroupForOrg::class]->call($org, $runnerGroupId, $runnerId);
    }

    public function listSelfHostedRunnersForOrg(string $org, int $perPage, int $page): Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListSelfHostedRunnersForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListSelfHostedRunnersForOrg::class] = new Operator\Actions\ListSelfHostedRunnersForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners());
        }

        return $this->operator[Operator\Actions\ListSelfHostedRunnersForOrg::class]->call($org, $perPage, $page);
    }

    public function listRunnerApplicationsForOrg(string $org): Schema\RunnerApplication
    {
        if (array_key_exists(Operator\Actions\ListRunnerApplicationsForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRunnerApplicationsForOrg::class] = new Operator\Actions\ListRunnerApplicationsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads());
        }

        return $this->operator[Operator\Actions\ListRunnerApplicationsForOrg::class]->call($org);
    }

    public function createRegistrationTokenForOrg(string $org): Schema\AuthenticationToken
    {
        if (array_key_exists(Operator\Actions\CreateRegistrationTokenForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateRegistrationTokenForOrg::class] = new Operator\Actions\CreateRegistrationTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->operator[Operator\Actions\CreateRegistrationTokenForOrg::class]->call($org);
    }

    public function createRemoveTokenForOrg(string $org): Schema\AuthenticationToken
    {
        if (array_key_exists(Operator\Actions\CreateRemoveTokenForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateRemoveTokenForOrg::class] = new Operator\Actions\CreateRemoveTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->operator[Operator\Actions\CreateRemoveTokenForOrg::class]->call($org);
    }

    public function getSelfHostedRunnerForOrg(string $org, int $runnerId): Schema\Runner
    {
        if (array_key_exists(Operator\Actions\GetSelfHostedRunnerForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetSelfHostedRunnerForOrg::class] = new Operator\Actions\GetSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\Actions\GetSelfHostedRunnerForOrg::class]->call($org, $runnerId);
    }

    public function deleteSelfHostedRunnerFromOrg(string $org, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteSelfHostedRunnerFromOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteSelfHostedRunnerFromOrg::class] = new Operator\Actions\DeleteSelfHostedRunnerFromOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\Actions\DeleteSelfHostedRunnerFromOrg::class]->call($org, $runnerId);
    }

    public function listOrgSecrets(string $org, int $perPage, int $page): Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListOrgSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListOrgSecrets::class] = new Operator\Actions\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets());
        }

        return $this->operator[Operator\Actions\ListOrgSecrets::class]->call($org, $perPage, $page);
    }

    public function getOrgPublicKey(string $org): Schema\ActionsPublicKey
    {
        if (array_key_exists(Operator\Actions\GetOrgPublicKey::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetOrgPublicKey::class] = new Operator\Actions\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Actions\GetOrgPublicKey::class]->call($org);
    }

    public function getOrgSecret(string $org, string $secretName): Schema\OrganizationActionsSecret
    {
        if (array_key_exists(Operator\Actions\GetOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetOrgSecret::class] = new Operator\Actions\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\GetOrgSecret::class]->call($org, $secretName);
    }

    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): Schema\EmptyObject
    {
        if (array_key_exists(Operator\Actions\CreateOrUpdateOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateOrUpdateOrgSecret::class] = new Operator\Actions\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\CreateOrUpdateOrgSecret::class]->call($org, $secretName, $params);
    }

    public function deleteOrgSecret(string $org, string $secretName): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteOrgSecret::class] = new Operator\Actions\DeleteOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\DeleteOrgSecret::class]->call($org, $secretName);
    }

    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListSelectedReposForOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListSelectedReposForOrgSecret::class] = new Operator\Actions\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Actions\ListSelectedReposForOrgSecret::class]->call($org, $secretName, $page, $perPage);
    }

    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\SetSelectedReposForOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetSelectedReposForOrgSecret::class] = new Operator\Actions\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Actions\SetSelectedReposForOrgSecret::class]->call($org, $secretName, $params);
    }

    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\AddSelectedRepoToOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\AddSelectedRepoToOrgSecret::class] = new Operator\Actions\AddSelectedRepoToOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\AddSelectedRepoToOrgSecret::class]->call($org, $secretName, $repositoryId);
    }

    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\RemoveSelectedRepoFromOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\RemoveSelectedRepoFromOrgSecret::class] = new Operator\Actions\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\RemoveSelectedRepoFromOrgSecret::class]->call($org, $secretName, $repositoryId);
    }

    public function listArtifactsForRepo(string $owner, string $repo, int $perPage, int $page): Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListArtifactsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListArtifactsForRepo::class] = new Operator\Actions\ListArtifactsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts());
        }

        return $this->operator[Operator\Actions\ListArtifactsForRepo::class]->call($owner, $repo, $perPage, $page);
    }

    public function getArtifact(string $owner, string $repo, int $artifactId): Schema\Artifact
    {
        if (array_key_exists(Operator\Actions\GetArtifact::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetArtifact::class] = new Operator\Actions\GetArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId());
        }

        return $this->operator[Operator\Actions\GetArtifact::class]->call($owner, $repo, $artifactId);
    }

    public function deleteArtifact(string $owner, string $repo, int $artifactId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteArtifact::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteArtifact::class] = new Operator\Actions\DeleteArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId());
        }

        return $this->operator[Operator\Actions\DeleteArtifact::class]->call($owner, $repo, $artifactId);
    }

    public function downloadArtifact(string $owner, string $repo, int $artifactId, string $archiveFormat): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadArtifact::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadArtifact::class] = new Operator\Actions\DownloadArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat());
        }

        return $this->operator[Operator\Actions\DownloadArtifact::class]->call($owner, $repo, $artifactId, $archiveFormat);
    }

    public function downloadArtifactStreaming(string $owner, string $repo, int $artifactId, string $archiveFormat): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadArtifactStreaming::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadArtifactStreaming::class] = new Operator\Actions\DownloadArtifactStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat());
        }

        return $this->operator[Operator\Actions\DownloadArtifactStreaming::class]->call($owner, $repo, $artifactId, $archiveFormat);
    }

    public function getJobForWorkflowRun(string $owner, string $repo, int $jobId): Schema\Job
    {
        if (array_key_exists(Operator\Actions\GetJobForWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetJobForWorkflowRun::class] = new Operator\Actions\GetJobForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId());
        }

        return $this->operator[Operator\Actions\GetJobForWorkflowRun::class]->call($owner, $repo, $jobId);
    }

    public function downloadJobLogsForWorkflowRun(string $owner, string $repo, int $jobId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadJobLogsForWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadJobLogsForWorkflowRun::class] = new Operator\Actions\DownloadJobLogsForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs());
        }

        return $this->operator[Operator\Actions\DownloadJobLogsForWorkflowRun::class]->call($owner, $repo, $jobId);
    }

    public function downloadJobLogsForWorkflowRunStreaming(string $owner, string $repo, int $jobId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadJobLogsForWorkflowRunStreaming::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadJobLogsForWorkflowRunStreaming::class] = new Operator\Actions\DownloadJobLogsForWorkflowRunStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs());
        }

        return $this->operator[Operator\Actions\DownloadJobLogsForWorkflowRunStreaming::class]->call($owner, $repo, $jobId);
    }

    public function getGithubActionsPermissionsRepository(string $owner, string $repo): Schema\ActionsRepositoryPermissions
    {
        if (array_key_exists(Operator\Actions\GetGithubActionsPermissionsRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetGithubActionsPermissionsRepository::class] = new Operator\Actions\GetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\Actions\GetGithubActionsPermissionsRepository::class]->call($owner, $repo);
    }

    public function setGithubActionsPermissionsRepository(string $owner, string $repo, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\SetGithubActionsPermissionsRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetGithubActionsPermissionsRepository::class] = new Operator\Actions\SetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\Actions\SetGithubActionsPermissionsRepository::class]->call($owner, $repo, $params);
    }

    public function getAllowedActionsRepository(string $owner, string $repo): Schema\SelectedActions
    {
        if (array_key_exists(Operator\Actions\GetAllowedActionsRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetAllowedActionsRepository::class] = new Operator\Actions\GetAllowedActionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\Actions\GetAllowedActionsRepository::class]->call($owner, $repo);
    }

    public function setAllowedActionsRepository(string $owner, string $repo, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\SetAllowedActionsRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetAllowedActionsRepository::class] = new Operator\Actions\SetAllowedActionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\Actions\SetAllowedActionsRepository::class]->call($owner, $repo, $params);
    }

    public function listSelfHostedRunnersForRepo(string $owner, string $repo, int $perPage, int $page): Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListSelfHostedRunnersForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListSelfHostedRunnersForRepo::class] = new Operator\Actions\ListSelfHostedRunnersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners());
        }

        return $this->operator[Operator\Actions\ListSelfHostedRunnersForRepo::class]->call($owner, $repo, $perPage, $page);
    }

    public function listRunnerApplicationsForRepo(string $owner, string $repo): Schema\RunnerApplication
    {
        if (array_key_exists(Operator\Actions\ListRunnerApplicationsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRunnerApplicationsForRepo::class] = new Operator\Actions\ListRunnerApplicationsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads());
        }

        return $this->operator[Operator\Actions\ListRunnerApplicationsForRepo::class]->call($owner, $repo);
    }

    public function createRegistrationTokenForRepo(string $owner, string $repo): Schema\AuthenticationToken
    {
        if (array_key_exists(Operator\Actions\CreateRegistrationTokenForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateRegistrationTokenForRepo::class] = new Operator\Actions\CreateRegistrationTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->operator[Operator\Actions\CreateRegistrationTokenForRepo::class]->call($owner, $repo);
    }

    public function createRemoveTokenForRepo(string $owner, string $repo): Schema\AuthenticationToken
    {
        if (array_key_exists(Operator\Actions\CreateRemoveTokenForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateRemoveTokenForRepo::class] = new Operator\Actions\CreateRemoveTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->operator[Operator\Actions\CreateRemoveTokenForRepo::class]->call($owner, $repo);
    }

    public function getSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): Schema\Runner
    {
        if (array_key_exists(Operator\Actions\GetSelfHostedRunnerForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetSelfHostedRunnerForRepo::class] = new Operator\Actions\GetSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\Actions\GetSelfHostedRunnerForRepo::class]->call($owner, $repo, $runnerId);
    }

    public function deleteSelfHostedRunnerFromRepo(string $owner, string $repo, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteSelfHostedRunnerFromRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteSelfHostedRunnerFromRepo::class] = new Operator\Actions\DeleteSelfHostedRunnerFromRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\Actions\DeleteSelfHostedRunnerFromRepo::class]->call($owner, $repo, $runnerId);
    }

    public function listWorkflowRunsForRepo(string $owner, string $repo, string $actor, string $branch, string $event, string $status, string $created, int $perPage, int $page, bool $excludePullRequests): Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListWorkflowRunsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListWorkflowRunsForRepo::class] = new Operator\Actions\ListWorkflowRunsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs());
        }

        return $this->operator[Operator\Actions\ListWorkflowRunsForRepo::class]->call($owner, $repo, $actor, $branch, $event, $status, $created, $perPage, $page, $excludePullRequests);
    }

    public function getWorkflowRun(string $owner, string $repo, int $runId, bool $excludePullRequests): Schema\WorkflowRun
    {
        if (array_key_exists(Operator\Actions\GetWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetWorkflowRun::class] = new Operator\Actions\GetWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId());
        }

        return $this->operator[Operator\Actions\GetWorkflowRun::class]->call($owner, $repo, $runId, $excludePullRequests);
    }

    public function deleteWorkflowRun(string $owner, string $repo, int $runId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteWorkflowRun::class] = new Operator\Actions\DeleteWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId());
        }

        return $this->operator[Operator\Actions\DeleteWorkflowRun::class]->call($owner, $repo, $runId);
    }

    public function listWorkflowRunArtifacts(string $owner, string $repo, int $runId, int $perPage, int $page): Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListWorkflowRunArtifacts::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListWorkflowRunArtifacts::class] = new Operator\Actions\ListWorkflowRunArtifacts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts());
        }

        return $this->operator[Operator\Actions\ListWorkflowRunArtifacts::class]->call($owner, $repo, $runId, $perPage, $page);
    }

    public function cancelWorkflowRun(string $owner, string $repo, int $runId): Schema\Operations\Actions\CancelWorkflowRun\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\Actions\CancelWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CancelWorkflowRun::class] = new Operator\Actions\CancelWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel());
        }

        return $this->operator[Operator\Actions\CancelWorkflowRun::class]->call($owner, $repo, $runId);
    }

    public function listJobsForWorkflowRun(string $owner, string $repo, int $runId, string $filter, int $perPage, int $page): Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListJobsForWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListJobsForWorkflowRun::class] = new Operator\Actions\ListJobsForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs());
        }

        return $this->operator[Operator\Actions\ListJobsForWorkflowRun::class]->call($owner, $repo, $runId, $filter, $perPage, $page);
    }

    public function downloadWorkflowRunLogs(string $owner, string $repo, int $runId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadWorkflowRunLogs::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadWorkflowRunLogs::class] = new Operator\Actions\DownloadWorkflowRunLogs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs());
        }

        return $this->operator[Operator\Actions\DownloadWorkflowRunLogs::class]->call($owner, $repo, $runId);
    }

    public function downloadWorkflowRunLogsStreaming(string $owner, string $repo, int $runId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadWorkflowRunLogsStreaming::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadWorkflowRunLogsStreaming::class] = new Operator\Actions\DownloadWorkflowRunLogsStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs());
        }

        return $this->operator[Operator\Actions\DownloadWorkflowRunLogsStreaming::class]->call($owner, $repo, $runId);
    }

    public function deleteWorkflowRunLogs(string $owner, string $repo, int $runId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteWorkflowRunLogs::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteWorkflowRunLogs::class] = new Operator\Actions\DeleteWorkflowRunLogs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs());
        }

        return $this->operator[Operator\Actions\DeleteWorkflowRunLogs::class]->call($owner, $repo, $runId);
    }

    public function reRunWorkflow(string $owner, string $repo, int $runId, array $params): Schema\Operations\Actions\ReRunWorkflow\Response\ApplicationJson\Created
    {
        if (array_key_exists(Operator\Actions\ReRunWorkflow::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ReRunWorkflow::class] = new Operator\Actions\ReRunWorkflow($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun());
        }

        return $this->operator[Operator\Actions\ReRunWorkflow::class]->call($owner, $repo, $runId, $params);
    }

    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListRepoSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRepoSecrets::class] = new Operator\Actions\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets());
        }

        return $this->operator[Operator\Actions\ListRepoSecrets::class]->call($owner, $repo, $perPage, $page);
    }

    public function getRepoPublicKey(string $owner, string $repo): Schema\ActionsPublicKey
    {
        if (array_key_exists(Operator\Actions\GetRepoPublicKey::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetRepoPublicKey::class] = new Operator\Actions\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Actions\GetRepoPublicKey::class]->call($owner, $repo);
    }

    public function getRepoSecret(string $owner, string $repo, string $secretName): Schema\ActionsSecret
    {
        if (array_key_exists(Operator\Actions\GetRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetRepoSecret::class] = new Operator\Actions\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\GetRepoSecret::class]->call($owner, $repo, $secretName);
    }

    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): Schema\Operations\Actions\CreateOrUpdateRepoSecret\Response\ApplicationJson\Created
    {
        if (array_key_exists(Operator\Actions\CreateOrUpdateRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateOrUpdateRepoSecret::class] = new Operator\Actions\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\CreateOrUpdateRepoSecret::class]->call($owner, $repo, $secretName, $params);
    }

    public function deleteRepoSecret(string $owner, string $repo, string $secretName): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteRepoSecret::class] = new Operator\Actions\DeleteRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\DeleteRepoSecret::class]->call($owner, $repo, $secretName);
    }

    public function listRepoWorkflows(string $owner, string $repo, int $perPage, int $page): Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListRepoWorkflows::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRepoWorkflows::class] = new Operator\Actions\ListRepoWorkflows($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows());
        }

        return $this->operator[Operator\Actions\ListRepoWorkflows::class]->call($owner, $repo, $perPage, $page);
    }

    public function getWorkflow(string $owner, string $repo, mixed $workflowId): Schema\Workflow
    {
        if (array_key_exists(Operator\Actions\GetWorkflow::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetWorkflow::class] = new Operator\Actions\GetWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId());
        }

        return $this->operator[Operator\Actions\GetWorkflow::class]->call($owner, $repo, $workflowId);
    }

    public function disableWorkflow(string $owner, string $repo, mixed $workflowId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\DisableWorkflow::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DisableWorkflow::class] = new Operator\Actions\DisableWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable());
        }

        return $this->operator[Operator\Actions\DisableWorkflow::class]->call($owner, $repo, $workflowId);
    }

    public function createWorkflowDispatch(string $owner, string $repo, mixed $workflowId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\CreateWorkflowDispatch::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateWorkflowDispatch::class] = new Operator\Actions\CreateWorkflowDispatch($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches());
        }

        return $this->operator[Operator\Actions\CreateWorkflowDispatch::class]->call($owner, $repo, $workflowId, $params);
    }

    public function enableWorkflow(string $owner, string $repo, mixed $workflowId): ResponseInterface
    {
        if (array_key_exists(Operator\Actions\EnableWorkflow::class, $this->operator) === false) {
            $this->operator[Operator\Actions\EnableWorkflow::class] = new Operator\Actions\EnableWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable());
        }

        return $this->operator[Operator\Actions\EnableWorkflow::class]->call($owner, $repo, $workflowId);
    }

    public function listWorkflowRuns(string $owner, string $repo, mixed $workflowId, string $actor, string $branch, string $event, string $status, string $created, int $perPage, int $page, bool $excludePullRequests): Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Actions\ListWorkflowRuns::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListWorkflowRuns::class] = new Operator\Actions\ListWorkflowRuns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs());
        }

        return $this->operator[Operator\Actions\ListWorkflowRuns::class]->call($owner, $repo, $workflowId, $actor, $branch, $event, $status, $created, $perPage, $page, $excludePullRequests);
    }
}
