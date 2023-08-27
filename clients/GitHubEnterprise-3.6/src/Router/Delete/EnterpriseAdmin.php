<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class EnterpriseAdmin
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code:int} */
    public function deleteGlobalWebhook(array $params): array
    {
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        $operator = new Operator\EnterpriseAdmin\DeleteGlobalWebhook($this->browser, $this->authentication);

        return $operator->call($arguments['hook_id']);
    }

    /** @return array{code:int} */
    public function deletePublicKey(array $params): array
    {
        $arguments = [];
        if (array_key_exists('key_ids', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key_ids');
        }

        $arguments['key_ids'] = $params['key_ids'];
        unset($params['key_ids']);
        $operator = new Operator\EnterpriseAdmin\DeletePublicKey($this->browser, $this->authentication);

        return $operator->call($arguments['key_ids']);
    }

    /** @return array{code:int} */
    public function deletePreReceiveEnvironment(array $params): array
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        $operator = new Operator\EnterpriseAdmin\DeletePreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());

        return $operator->call($arguments['pre_receive_environment_id']);
    }

    /** @return array{code:int} */
    public function deletePreReceiveHook(array $params): array
    {
        $arguments = [];
        if (array_key_exists('pre_receive_hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_hook_id');
        }

        $arguments['pre_receive_hook_id'] = $params['pre_receive_hook_id'];
        unset($params['pre_receive_hook_id']);
        $operator = new Operator\EnterpriseAdmin\DeletePreReceiveHook($this->browser, $this->authentication);

        return $operator->call($arguments['pre_receive_hook_id']);
    }

    /** @return array{code:int} */
    public function deletePersonalAccessToken(array $params): array
    {
        $arguments = [];
        if (array_key_exists('token_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: token_id');
        }

        $arguments['token_id'] = $params['token_id'];
        unset($params['token_id']);
        $operator = new Operator\EnterpriseAdmin\DeletePersonalAccessToken($this->browser, $this->authentication);

        return $operator->call($arguments['token_id']);
    }

    /** @return array{code:int} */
    public function deleteUser(array $params): array
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Operator\EnterpriseAdmin\DeleteUser($this->browser, $this->authentication);

        return $operator->call($arguments['username']);
    }

    /** @return array{code:int} */
    public function demoteSiteAdministrator(array $params): array
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Operator\EnterpriseAdmin\DemoteSiteAdministrator($this->browser, $this->authentication);

        return $operator->call($arguments['username']);
    }

    /** @return array{code:int} */
    public function unsuspendUser(array $params): array
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Operator\EnterpriseAdmin\UnsuspendUser($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['username'], $params);
    }

    /** @return array{code:int} */
    public function deleteImpersonationOAuthToken(array $params): array
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken($this->browser, $this->authentication);

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function removePreReceiveHookEnforcementForOrg(array $params): OrgPreReceiveHook|array
    {
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
        $operator = new Operator\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId());

        return $operator->call($arguments['org'], $arguments['pre_receive_hook_id']);
    }

    /** @return array{code:int} */
    public function deleteScimGroupFromEnterprise(array $params): array
    {
        $arguments = [];
        if (array_key_exists('scim_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: scim_group_id');
        }

        $arguments['scim_group_id'] = $params['scim_group_id'];
        unset($params['scim_group_id']);
        $operator = new Operator\EnterpriseAdmin\DeleteScimGroupFromEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Groups🌀ScimGroupId());

        return $operator->call($arguments['scim_group_id']);
    }

    /** @return array{code:int} */
    public function deleteUserFromEnterprise(array $params): array
    {
        $arguments = [];
        if (array_key_exists('scim_user_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: scim_user_id');
        }

        $arguments['scim_user_id'] = $params['scim_user_id'];
        unset($params['scim_user_id']);
        $operator = new Operator\EnterpriseAdmin\DeleteUserFromEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Users🌀ScimUserId());

        return $operator->call($arguments['scim_user_id']);
    }

    /** @return iterable<Schema\SshKey>|array{code:int} */
    public function removeAuthorizedSshKey(array $params): iterable
    {
        $operator = new Operator\EnterpriseAdmin\RemoveAuthorizedSshKey($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys());

        return $operator->call($params);
    }

    /** @return array{code:int} */
    public function removeAnnouncement(array $params): array
    {
        $operator = new Operator\EnterpriseAdmin\RemoveAnnouncement($this->browser, $this->authentication);

        return $operator->call();
    }

    /** @return array{code:int} */
    public function disableSelectedOrganizationGithubActionsEnterprise(array $params): array
    {
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
        $operator = new Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['org_id']);
    }

    /** @return */
    public function removeAllCustomLabelsFromSelfHostedRunnerForEnterprise(array $params): Json|array
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        $operator = new Operator\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels());

        return $operator->call($arguments['enterprise'], $arguments['runner_id']);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerGroupFromEnterprise(array $params): array
    {
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
        $operator = new Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id']);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerFromEnterprise(array $params): array
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        $operator = new Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_id']);
    }

    /** @return */
    public function removePreReceiveHookEnforcementForRepo(array $params): RepositoryPreReceiveHook|array
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
        if (array_key_exists('pre_receive_hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_hook_id');
        }

        $arguments['pre_receive_hook_id'] = $params['pre_receive_hook_id'];
        unset($params['pre_receive_hook_id']);
        $operator = new Operator\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pre_receive_hook_id']);
    }

    /** @return array{code:int} */
    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise(array $params): array
    {
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
        $operator = new Operator\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['org_id']);
    }

    /** @return array{code:int} */
    public function removeSelfHostedRunnerFromGroupForEnterprise(array $params): array
    {
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
        $operator = new Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['runner_id']);
    }

    /** @return */
    public function removeCustomLabelFromSelfHostedRunnerForEnterprise(array $params): Ok|array
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        $operator = new Operator\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name());

        return $operator->call($arguments['enterprise'], $arguments['runner_id'], $arguments['name']);
    }
}
