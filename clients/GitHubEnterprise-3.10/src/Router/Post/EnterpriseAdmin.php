<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\AuthenticationToken;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;
use ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;
use ApiClients\Client\GitHubEnterprise\Schema\MaintenanceStatus;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\SyncLdapMappingForTeam\Response\ApplicationJson\Created;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\SyncLdapMappingForUser\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationSimple;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\SimpleUser;
use ApiClients\Client\GitHubEnterprise\Schema\UserResponse;
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
    public function createGlobalWebhook(array $params): GlobalHook|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Admin\Hooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks();
        }

        $operator = new Operator\EnterpriseAdmin\CreateGlobalWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Hooks::class]);

        return $operator->call($params);
    }

    /** @return */
    public function createOrg(array $params): OrganizationSimple|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Admin\Organizations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Organizations::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations();
        }

        $operator = new Operator\EnterpriseAdmin\CreateOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Organizations::class]);

        return $operator->call($params);
    }

    /** @return */
    public function createPreReceiveEnvironment(array $params): PreReceiveEnvironment|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveEnvironments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments();
        }

        $operator = new Operator\EnterpriseAdmin\CreatePreReceiveEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class]);

        return $operator->call($params);
    }

    /** @return */
    public function createPreReceiveHook(array $params): PreReceiveHook|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveHooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks();
        }

        $operator = new Operator\EnterpriseAdmin\CreatePreReceiveHook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks::class]);

        return $operator->call($params);
    }

    /** @return */
    public function createUser(array $params): SimpleUser|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Admin\Users::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Users::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Users();
        }

        $operator = new Operator\EnterpriseAdmin\CreateUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Users::class]);

        return $operator->call($params);
    }

    /** @return array{code: int} */
    public function pingGlobalWebhook(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        $operator = new Operator\EnterpriseAdmin\PingGlobalWebhook($this->browser, $this->authentication);

        return $operator->call($arguments['hook_id']);
    }

    /** @return */
    public function startPreReceiveEnvironmentDownload(array $params): PreReceiveEnvironmentDownloadStatus|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads();
        }

        $operator = new Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads::class]);

        return $operator->call($arguments['pre_receive_environment_id']);
    }

    /** @return */
    public function createImpersonationOAuthToken(array $params): Authorization|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Admin\Users\Username\Authorizations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Users\Username\Authorizations::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀Username🌀Authorizations();
        }

        $operator = new Operator\EnterpriseAdmin\CreateImpersonationOAuthToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Users\Username\Authorizations::class]);

        return $operator->call($arguments['username'], $params);
    }

    /** @return */
    public function createSelfHostedRunnerGroupForEnterprise(array $params): RunnerGroupsEnterprise|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups();
        }

        $operator = new Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups::class]);

        return $operator->call($arguments['enterprise'], $params);
    }

    /** @return (iterable<Schema\SshKey> | array{code: int}) */
    public function addAuthorizedSshKey(array $params): iterable
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class] = $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys();
        }

        $operator = new Operator\EnterpriseAdmin\AddAuthorizedSshKey($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class]);

        return $operator->call($params);
    }

    /** @return */
    public function syncLdapMappingForTeam(array $params): Created|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('team_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_id');
        }

        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists(Hydrator\Operation\Admin\Ldap\Teams\TeamId\Sync::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Ldap\Teams\TeamId\Sync::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Sync();
        }

        $operator = new Operator\EnterpriseAdmin\SyncLdapMappingForTeam($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Ldap\Teams\TeamId\Sync::class]);

        return $operator->call($arguments['team_id']);
    }

    /** @return */
    public function syncLdapMappingForUser(array $params): Json|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Admin\Ldap\Users\Username\Sync::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Ldap\Users\Username\Sync::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀Username🌀Sync();
        }

        $operator = new Operator\EnterpriseAdmin\SyncLdapMappingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Ldap\Users\Username\Sync::class]);

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function createRegistrationTokenForEnterprise(array $params): AuthenticationToken|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RegistrationToken::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RegistrationToken::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken();
        }

        $operator = new Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RegistrationToken::class]);

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function createRemoveTokenForEnterprise(array $params): AuthenticationToken|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RemoveToken::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RemoveToken::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RemoveToken();
        }

        $operator = new Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RemoveToken::class]);

        return $operator->call($arguments['enterprise']);
    }

    /** @return (iterable<Schema\GhesSetMaintenanceResponse> | array{code: int}) */
    public function setManageMaintenance(array $params): iterable
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Manage\V1\Maintenance::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Manage\V1\Maintenance::class] = $this->hydrators->getObjectMapperOperation🌀Manage🌀V1🌀Maintenance();
        }

        $operator = new Operator\EnterpriseAdmin\SetManageMaintenance($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Manage\V1\Maintenance::class]);

        return $operator->call($params);
    }

    /** @return (Schema\GroupResponse | array{code: int}) */
    public function provisionEnterpriseGroup(array $params): GroupResponse|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Scim\V2\Groups::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Scim\V2\Groups::class] = $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Groups();
        }

        $operator = new Operator\EnterpriseAdmin\ProvisionEnterpriseGroup($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Scim\V2\Groups::class]);

        return $operator->call($params);
    }

    /** @return (Schema\UserResponse | array{code: int}) */
    public function provisionEnterpriseUser(array $params): UserResponse|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Scim\V2\Users::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Scim\V2\Users::class] = $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Users();
        }

        $operator = new Operator\EnterpriseAdmin\ProvisionEnterpriseUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Scim\V2\Users::class]);

        return $operator->call($params);
    }

    /** @return array{code: int} */
    public function startConfigurationProcess(array $params): array
    {
        $matched  = true;
        $operator = new Operator\EnterpriseAdmin\StartConfigurationProcess($this->browser, $this->authentication);

        return $operator->call();
    }

    /** @return (Schema\MaintenanceStatus | array{code: int}) */
    public function enableOrDisableMaintenanceMode(array $params): MaintenanceStatus|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Setup\Api\Maintenance::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Setup\Api\Maintenance::class] = $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance();
        }

        $operator = new Operator\EnterpriseAdmin\EnableOrDisableMaintenanceMode($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Setup\Api\Maintenance::class]);

        return $operator->call($params);
    }

    /** @return array{code: int} */
    public function createEnterpriseServerLicense(array $params): array
    {
        $matched  = true;
        $operator = new Operator\EnterpriseAdmin\CreateEnterpriseServerLicense($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($params);
    }

    /** @return array{code: int} */
    public function upgradeLicense(array $params): array
    {
        $matched  = true;
        $operator = new Operator\EnterpriseAdmin\UpgradeLicense($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($params);
    }

    /** @return */
    public function addCustomLabelsToSelfHostedRunnerForEnterprise(array $params): Ok|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId\Labels::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId\Labels::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels();
        }

        $operator = new Operator\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId\Labels::class]);

        return $operator->call($arguments['enterprise'], $arguments['runner_id'], $params);
    }

    /** @return */
    public function startPreReceiveEnvironmentDownloadStreaming(array $params): PreReceiveEnvironmentDownloadStatus|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads();
        }

        $operator = new Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads::class]);

        return $operator->call($arguments['pre_receive_environment_id']);
    }
}
