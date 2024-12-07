<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Put;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\AddSelectedRepoToOrgSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\AddSelectedRepoToOrgVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\AddSelfHostedRunnerToGroupForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateOrUpdateEnvironmentSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateOrUpdateOrgSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\CreateOrUpdateRepoSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\DisableWorkflow;
use ApiClients\Client\GitHub\Internal\Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\EnableWorkflow;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetAllowedActionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetAllowedActionsRepository;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetCustomOidcSubClaimForRepo;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetGithubActionsPermissionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetGithubActionsPermissionsRepository;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetSelectedReposForOrgSecret;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetSelectedReposForOrgVariable;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetSelfHostedRunnersInGroupForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Actions\SetWorkflowAccessToRepository;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Actions
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function setGithubActionsPermissionsOrganization(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new SetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function enableSelectedRepositoryGithubActionsOrganization(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        $operator = new EnableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['repository_id']);
    }

    /** @return */
    public function setRepoAccessToSelfHostedRunnerGroupInOrg(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        $operator = new SetRepoAccessToSelfHostedRunnerGroupInOrg($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $arguments['runner_group_id'], $params);
    }

    /** @return */
    public function setSelfHostedRunnersInGroupForOrg(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        $operator = new SetSelfHostedRunnersInGroupForOrg($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $arguments['runner_group_id'], $params);
    }

    /** @return */
    public function setCustomLabelsForSelfHostedRunnerForOrg(array $params): Ok
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        $operator = new SetCustomLabelsForSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());

        return $operator->call($arguments['org'], $arguments['runner_id'], $params);
    }

    /** @return */
    public function setSelectedReposForOrgSecret(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        $operator = new SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $arguments['secret_name'], $params);
    }

    /** @return */
    public function setSelectedReposForOrgVariable(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        $operator = new SetSelectedReposForOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $arguments['name'], $params);
    }

    /** @return */
    public function setWorkflowAccessToRepository(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        $operator = new SetWorkflowAccessToRepository($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function setAllowedActionsRepository(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        $operator = new SetAllowedActionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function setGithubActionsDefaultWorkflowPermissionsRepository(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        $operator = new SetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function createOrUpdateRepoSecret(array $params): EmptyObject|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        $operator = new CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['secret_name'], $params);
    }

    /** @return */
    public function setSelectedRepositoriesEnabledGithubActionsOrganization(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new SetSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function setAllowedActionsOrganization(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new SetAllowedActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function setGithubActionsDefaultWorkflowPermissionsOrganization(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new SetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function createOrUpdateOrgSecret(array $params): EmptyObject|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        $operator = new CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());

        return $operator->call($arguments['org'], $arguments['secret_name'], $params);
    }

    /** @return */
    public function setGithubActionsPermissionsRepository(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        $operator = new SetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function addRepoAccessToSelfHostedRunnerGroupInOrg(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        $operator = new AddRepoAccessToSelfHostedRunnerGroupInOrg($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['runner_group_id'], $arguments['repository_id']);
    }

    /** @return */
    public function addSelfHostedRunnerToGroupForOrg(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        $operator = new AddSelfHostedRunnerToGroupForOrg($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['runner_group_id'], $arguments['runner_id']);
    }

    /** @return */
    public function addSelectedRepoToOrgSecret(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        $operator = new AddSelectedRepoToOrgSecret($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['secret_name'], $arguments['repository_id']);
    }

    /** @return */
    public function addSelectedRepoToOrgVariable(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        $operator = new AddSelectedRepoToOrgVariable($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['name'], $arguments['repository_id']);
    }

    /** @return */
    public function setCustomOidcSubClaimForRepo(array $params): EmptyObject
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        $operator = new SetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub());

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function setCustomLabelsForSelfHostedRunnerForRepo(array $params): Ok
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        $operator = new SetCustomLabelsForSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['runner_id'], $params);
    }

    /** @return */
    public function disableWorkflow(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('workflow_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: workflow_id');
        }

        $arguments['workflow_id'] = $params['workflow_id'];
        unset($params['workflow_id']);
        $operator = new DisableWorkflow($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['workflow_id']);
    }

    /** @return */
    public function enableWorkflow(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('workflow_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: workflow_id');
        }

        $arguments['workflow_id'] = $params['workflow_id'];
        unset($params['workflow_id']);
        $operator = new EnableWorkflow($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['workflow_id']);
    }

    /** @return */
    public function createOrUpdateEnvironmentSecret(array $params): EmptyObject|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('environment_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: environment_name');
        }

        $arguments['environment_name'] = $params['environment_name'];
        unset($params['environment_name']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        $operator = new CreateOrUpdateEnvironmentSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['environment_name'], $arguments['secret_name'], $params);
    }
}
