<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Patch;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema\Announcement;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook2;
use ApiClients\Client\GitHubEnterprise\Schema\LdapMappingTeam;
use ApiClients\Client\GitHubEnterprise\Schema\LdapMappingUser;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\UpdateOrgName\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\UpdateUsernameForUser\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise;
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

    /** @return */
    public function updateGlobalWebhook(array $params): GlobalHook2|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists('accept', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: accept');
        }

        $arguments['accept'] = $params['accept'];
        unset($params['accept']);
        if (array_key_exists(Hydrator\Operation\Admin\Hooks\HookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Hooks\HookId::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId();
        }

        $operator = new Operator\EnterpriseAdmin\UpdateGlobalWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Hooks\HookId::class]);

        return $operator->call($arguments['hook_id'], $arguments['accept'], $params);
    }

    /** @return */
    public function updateOrgName(array $params): Accepted|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Admin\Organizations\Org::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Organizations\Org::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations🌀Org();
        }

        $operator = new Operator\EnterpriseAdmin\UpdateOrgName($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Organizations\Org::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function updatePreReceiveEnvironment(array $params): PreReceiveEnvironment|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId();
        }

        $operator = new Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId::class]);

        return $operator->call($arguments['pre_receive_environment_id'], $params);
    }

    /** @return */
    public function updatePreReceiveHook(array $params): PreReceiveHook|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('pre_receive_hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_hook_id');
        }

        $arguments['pre_receive_hook_id'] = $params['pre_receive_hook_id'];
        unset($params['pre_receive_hook_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveHooks\PreReceiveHookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks\PreReceiveHookId::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId();
        }

        $operator = new Operator\EnterpriseAdmin\UpdatePreReceiveHook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks\PreReceiveHookId::class]);

        return $operator->call($arguments['pre_receive_hook_id'], $params);
    }

    /** @return */
    public function updateUsernameForUser(array $params): Json|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Admin\Users\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Users\Username::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀Username();
        }

        $operator = new Operator\EnterpriseAdmin\UpdateUsernameForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Users\Username::class]);

        return $operator->call($arguments['username'], $params);
    }

    /** @return */
    public function updateLdapMappingForTeam(array $params): LdapMappingTeam|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('team_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_id');
        }

        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists(Hydrator\Operation\Admin\Ldap\Teams\TeamId\Mapping::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Ldap\Teams\TeamId\Mapping::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Mapping();
        }

        $operator = new Operator\EnterpriseAdmin\UpdateLdapMappingForTeam($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Ldap\Teams\TeamId\Mapping::class]);

        return $operator->call($arguments['team_id'], $params);
    }

    /** @return */
    public function updateLdapMappingForUser(array $params): LdapMappingUser|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Admin\Ldap\Users\Username\Mapping::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Ldap\Users\Username\Mapping::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀Username🌀Mapping();
        }

        $operator = new Operator\EnterpriseAdmin\UpdateLdapMappingForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Ldap\Users\Username\Mapping::class]);

        return $operator->call($arguments['username'], $params);
    }

    /** @return */
    public function updateSelfHostedRunnerGroupForEnterprise(array $params): RunnerGroupsEnterprise|array
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId();
        }

        $operator = new Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId::class]);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $params);
    }

    /** @return */
    public function updatePreReceiveHookEnforcementForRepo(array $params): RepositoryPreReceiveHook|array
    {
        $matched   = true;
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
        if (array_key_exists('pre_receive_hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_hook_id');
        }

        $arguments['pre_receive_hook_id'] = $params['pre_receive_hook_id'];
        unset($params['pre_receive_hook_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId();
        }

        $operator = new Operator\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pre_receive_hook_id'], $params);
    }

    /** @return */
    public function setAnnouncement(array $params): Announcement|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Announcement::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Announcement::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement();
        }

        $operator = new Operator\EnterpriseAdmin\SetAnnouncement($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Announcement::class]);

        return $operator->call($params);
    }

    /** @return */
    public function updatePreReceiveHookEnforcementForOrg(array $params): OrgPreReceiveHook|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('pre_receive_hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_hook_id');
        }

        $arguments['pre_receive_hook_id'] = $params['pre_receive_hook_id'];
        unset($params['pre_receive_hook_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId();
        }

        $operator = new Operator\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId::class]);

        return $operator->call($arguments['org'], $arguments['pre_receive_hook_id'], $params);
    }
}
