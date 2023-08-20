<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Put;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class EnterpriseAdmin
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function setGithubActionsPermissionsEnterprise(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['enterprise'], $params);
    }

    /** @return array{code: int} */
    public function setSettings(array $params): array
    {
        $matched  = true;
        $operator = new Operator\EnterpriseAdmin\SetSettings($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($params);
    }

    /** @return array{code: int} */
    public function promoteUserToBeSiteAdministrator(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Operator\EnterpriseAdmin\PromoteUserToBeSiteAdministrator($this->browser, $this->authentication);

        return $operator->call($arguments['username']);
    }

    /** @return array{code: int} */
    public function suspendUser(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Operator\EnterpriseAdmin\SuspendUser($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['username'], $params);
    }

    /** @return array{code: int} */
    public function setSelectedOrganizationsEnabledGithubActionsEnterprise(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['enterprise'], $params);
    }

    /** @return array{code: int} */
    public function setAllowedActionsEnterprise(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Operator\EnterpriseAdmin\SetAllowedActionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['enterprise'], $params);
    }

    /** @return array{code: int} */
    public function enableSelectedOrganizationGithubActionsEnterprise(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('org_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org_id');
        }

        $arguments['org_id'] = $params['org_id'];
        unset($params['org_id']);
        $operator = new Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['org_id']);
    }

    /** @return array{code: int} */
    public function setOrgAccessToSelfHostedRunnerGroupInEnterprise(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        $operator = new Operator\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $params);
    }

    /** @return array{code: int} */
    public function setSelfHostedRunnersInGroupForEnterprise(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        $operator = new Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $params);
    }

    /** @return array{code: int} */
    public function addOrgAccessToSelfHostedRunnerGroupInEnterprise(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        if (array_key_exists('org_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org_id');
        }

        $arguments['org_id'] = $params['org_id'];
        unset($params['org_id']);
        $operator = new Operator\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['org_id']);
    }

    /** @return array{code: int} */
    public function addSelfHostedRunnerToGroupForEnterprise(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
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
        $operator = new Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['runner_id']);
    }
}
