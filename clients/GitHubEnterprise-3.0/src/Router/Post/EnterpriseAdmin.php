<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Hydrator;
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
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function createGlobalWebhook(array $params)
    {
        $arguments = [];
        if (array_key_exists('accept', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: accept');
        }

        $arguments['accept'] = $params['accept'];
        unset($params['accept']);
        if (array_key_exists(Hydrator\Operation\Admin\Hooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks();
        }

        $operator = new Operator\EnterpriseAdmin\CreateGlobalWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Hooks::class]);

        return $operator->call($arguments['accept'], $params);
    }

    public function createOrg(array $params)
    {
        if (array_key_exists(Hydrator\Operation\Admin\Organizations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Organizations::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations();
        }

        $operator = new Operator\EnterpriseAdmin\CreateOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Organizations::class]);

        return $operator->call($params);
    }

    public function createPreReceiveEnvironment(array $params)
    {
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveEnvironments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments();
        }

        $operator = new Operator\EnterpriseAdmin\CreatePreReceiveEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class]);

        return $operator->call($params);
    }

    public function createPreReceiveHook(array $params)
    {
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveHooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks();
        }

        $operator = new Operator\EnterpriseAdmin\CreatePreReceiveHook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks::class]);

        return $operator->call($params);
    }

    public function createUser(array $params)
    {
        if (array_key_exists(Hydrator\Operation\Admin\Users::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Users::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Users();
        }

        $operator = new Operator\EnterpriseAdmin\CreateUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Users::class]);

        return $operator->call($params);
    }

    public function pingGlobalWebhook(array $params)
    {
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
        $operator = new Operator\EnterpriseAdmin\PingGlobalWebhook($this->browser, $this->authentication);

        return $operator->call($arguments['hook_id'], $arguments['accept']);
    }

    public function startPreReceiveEnvironmentDownload(array $params)
    {
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

    public function createImpersonationOAuthToken(array $params)
    {
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

    public function createSelfHostedRunnerGroupForEnterprise(array $params)
    {
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

    public function addAuthorizedSshKey(array $params)
    {
        $operator = new Operator\EnterpriseAdmin\AddAuthorizedSshKey($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($params);
    }

    public function syncLdapMappingForTeam(array $params)
    {
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

    public function syncLdapMappingForUser(array $params)
    {
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

    public function createRegistrationTokenForEnterprise(array $params)
    {
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

    public function createRemoveTokenForEnterprise(array $params)
    {
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

    public function startConfigurationProcess(array $params)
    {
        $operator = new Operator\EnterpriseAdmin\StartConfigurationProcess($this->browser, $this->authentication);

        return $operator->call();
    }

    public function enableOrDisableMaintenanceMode(array $params)
    {
        if (array_key_exists(Hydrator\Operation\Setup\Api\Maintenance::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Setup\Api\Maintenance::class] = $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance();
        }

        $operator = new Operator\EnterpriseAdmin\EnableOrDisableMaintenanceMode($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Setup\Api\Maintenance::class]);

        return $operator->call($params);
    }

    public function createEnterpriseServerLicense(array $params)
    {
        $operator = new Operator\EnterpriseAdmin\CreateEnterpriseServerLicense($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($params);
    }

    public function upgradeLicense(array $params)
    {
        $operator = new Operator\EnterpriseAdmin\UpgradeLicense($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($params);
    }

    public function startPreReceiveEnvironmentDownloadStreaming(array $params)
    {
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
