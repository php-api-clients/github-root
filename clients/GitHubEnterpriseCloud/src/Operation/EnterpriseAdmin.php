<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrators;
use ApiClients\Client\GitHubEnterpriseCloud\Operator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class EnterpriseAdmin
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getServerStatistics(string $enterpriseOrOrg, string $dateStart, string $dateEnd): Schema\ServerStatistics
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetServerStatistics::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetServerStatistics::class] = new Operator\EnterpriseAdmin\GetServerStatistics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀EnterpriseInstallation🌀EnterpriseOrOrg🌀ServerStatistics());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetServerStatistics::class]->call($enterpriseOrOrg, $dateStart, $dateEnd);
    }

    public function getGithubActionsPermissionsEnterprise(string $enterprise): Schema\ActionsEnterprisePermissions
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise::class] = new Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise::class]->call($enterprise);
    }

    public function setGithubActionsPermissionsEnterprise(string $enterprise, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise::class] = new Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise::class]->call($enterprise, $params);
    }

    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise::class]->call($enterprise, $perPage, $page);
    }

    public function setSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise::class]->call($enterprise, $params);
    }

    public function enableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations🌀OrgId());
        }

        return $this->operator[Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise::class]->call($enterprise, $orgId);
    }

    public function disableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations🌀OrgId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise::class]->call($enterprise, $orgId);
    }

    public function getAllowedActionsEnterprise(string $enterprise): Schema\SelectedActions
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetAllowedActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetAllowedActionsEnterprise::class] = new Operator\EnterpriseAdmin\GetAllowedActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetAllowedActionsEnterprise::class]->call($enterprise);
    }

    public function setAllowedActionsEnterprise(string $enterprise, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetAllowedActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetAllowedActionsEnterprise::class] = new Operator\EnterpriseAdmin\SetAllowedActionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetAllowedActionsEnterprise::class]->call($enterprise, $params);
    }

    public function listSelfHostedRunnerGroupsForEnterprise(string $enterprise, string $visibleToOrganization, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise::class] = new Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise::class]->call($enterprise, $visibleToOrganization, $perPage, $page);
    }

    public function createSelfHostedRunnerGroupForEnterprise(string $enterprise, array $params): Schema\RunnerGroupsEnterprise
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise::class] = new Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise::class]->call($enterprise, $params);
    }

    public function getSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId): Schema\RunnerGroupsEnterprise
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise::class] = new Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise::class]->call($enterprise, $runnerGroupId);
    }

    public function deleteSelfHostedRunnerGroupFromEnterprise(string $enterprise, int $runnerGroupId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise::class] = new Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise::class]->call($enterprise, $runnerGroupId);
    }

    public function updateSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): Schema\RunnerGroupsEnterprise
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise::class] = new Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $params);
    }

    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise::class] = new Operator\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise::class]->call($enterprise, $runnerGroupId, $perPage, $page);
    }

    public function setOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise::class] = new Operator\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise::class]->call($enterprise, $runnerGroupId, $params);
    }

    public function addOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $orgId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise::class] = new Operator\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations🌀OrgId());
        }

        return $this->operator[Operator\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise::class]->call($enterprise, $runnerGroupId, $orgId);
    }

    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $orgId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise::class] = new Operator\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations🌀OrgId());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise::class]->call($enterprise, $runnerGroupId, $orgId);
    }

    public function listSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise::class] = new Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $perPage, $page);
    }

    public function setSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise::class] = new Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $params);
    }

    public function addSelfHostedRunnerToGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise::class] = new Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $runnerId);
    }

    public function removeSelfHostedRunnerFromGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise::class] = new Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $runnerId);
    }

    public function listSelfHostedRunnersForEnterprise(string $enterprise, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise::class] = new Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise::class]->call($enterprise, $perPage, $page);
    }

    public function listRunnerApplicationsForEnterprise(string $enterprise): Schema\RunnerApplication
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise::class] = new Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise::class]->call($enterprise);
    }

    public function createRegistrationTokenForEnterprise(string $enterprise): Schema\AuthenticationToken
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise::class] = new Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise::class]->call($enterprise);
    }

    public function createRemoveTokenForEnterprise(string $enterprise): Schema\AuthenticationToken
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise::class] = new Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise::class]->call($enterprise);
    }

    public function getSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): Schema\Runner
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise::class] = new Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise::class]->call($enterprise, $runnerId);
    }

    public function deleteSelfHostedRunnerFromEnterprise(string $enterprise, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise::class] = new Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise::class]->call($enterprise, $runnerId);
    }

    public function listLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise::class] = new Operator\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise::class]->call($enterprise, $runnerId);
    }

    public function setCustomLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise::class] = new Operator\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise::class]->call($enterprise, $runnerId, $params);
    }

    public function addCustomLabelsToSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, array $params): Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise::class] = new Operator\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise::class]->call($enterprise, $runnerId, $params);
    }

    public function removeAllCustomLabelsFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): Schema\Operations\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise::class] = new Operator\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise::class]->call($enterprise, $runnerId);
    }

    public function removeCustomLabelFromSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId, string $name): Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise::class] = new Operator\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise::class]->call($enterprise, $runnerId, $name);
    }

    public function getAuditLog(string $enterprise, string $phrase, string $include, string $after, string $before, string $order, int $page, int $perPage): Schema\AuditLogEvent
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetAuditLog::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetAuditLog::class] = new Operator\EnterpriseAdmin\GetAuditLog($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀AuditLog());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetAuditLog::class]->call($enterprise, $phrase, $include, $after, $before, $order, $page, $perPage);
    }

    public function getAuditLogListing(string $enterprise, string $phrase, string $include, string $after, string $before, string $order, int $page, int $perPage): Schema\AuditLogEvent
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetAuditLogListing::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetAuditLogListing::class] = new Operator\EnterpriseAdmin\GetAuditLogListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀AuditLog());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetAuditLogListing::class]->call($enterprise, $phrase, $include, $after, $before, $order, $page, $perPage);
    }

    public function getConsumedLicenses(string $enterprise, int $perPage, int $page): Schema\GetConsumedLicenses
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetConsumedLicenses::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetConsumedLicenses::class] = new Operator\EnterpriseAdmin\GetConsumedLicenses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀ConsumedLicenses());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetConsumedLicenses::class]->call($enterprise, $perPage, $page);
    }

    public function getLicenseSyncStatus(string $enterprise): Schema\GetLicenseSyncStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetLicenseSyncStatus::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetLicenseSyncStatus::class] = new Operator\EnterpriseAdmin\GetLicenseSyncStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀LicenseSyncStatus());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetLicenseSyncStatus::class]->call($enterprise);
    }
}
