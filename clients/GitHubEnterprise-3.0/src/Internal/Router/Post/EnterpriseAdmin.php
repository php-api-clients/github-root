<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Post;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\AuthenticationToken;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;
use ApiClients\Client\GitHubEnterprise\Schema\MaintenanceStatus;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\SyncLdapMappingForTeam\Response\ApplicationJson\Created;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\SyncLdapMappingForUser\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationSimple;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\SimpleUser;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class EnterpriseAdmin
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    public function createGlobalWebhook(array $params): GlobalHook
    {
        $arguments = [];
        if (array_key_exists('accept', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: accept');
        }

        $arguments['accept'] = $params['accept'];
        unset($params['accept']);
        $operator = new Internal\Operator\EnterpriseAdmin\CreateGlobalWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());

        return $operator->call($arguments['accept'], $params);
    }

    public function createOrg(array $params): OrganizationSimple
    {
        $operator = new Internal\Operator\EnterpriseAdmin\CreateOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations());

        return $operator->call($params);
    }

    public function createPreReceiveEnvironment(array $params): PreReceiveEnvironment
    {
        $operator = new Internal\Operator\EnterpriseAdmin\CreatePreReceiveEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());

        return $operator->call($params);
    }

    public function createPreReceiveHook(array $params): PreReceiveHook
    {
        $operator = new Internal\Operator\EnterpriseAdmin\CreatePreReceiveHook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks());

        return $operator->call($params);
    }

    public function createUser(array $params): SimpleUser
    {
        $operator = new Internal\Operator\EnterpriseAdmin\CreateUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Users());

        return $operator->call($params);
    }

    public function pingGlobalWebhook(array $params): WithoutBody
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
        $operator = new Internal\Operator\EnterpriseAdmin\PingGlobalWebhook($this->browser, $this->authentication);

        return $operator->call($arguments['hook_id'], $arguments['accept']);
    }

    public function startPreReceiveEnvironmentDownload(array $params): PreReceiveEnvironmentDownloadStatus
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads());

        return $operator->call($arguments['pre_receive_environment_id']);
    }

    public function createImpersonationOAuthToken(array $params): Authorization
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\EnterpriseAdmin\CreateImpersonationOAuthToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀Username🌀Authorizations());

        return $operator->call($arguments['username'], $params);
    }

    public function createSelfHostedRunnerGroupForEnterprise(array $params): RunnerGroupsEnterprise
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());

        return $operator->call($arguments['enterprise'], $params);
    }

    /** @return iterable<int,Schema\SshKey> */
    public function addAuthorizedSshKey(array $params): iterable
    {
        $operator = new Internal\Operator\EnterpriseAdmin\AddAuthorizedSshKey($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys());

        return $operator->call($params);
    }

    public function syncLdapMappingForTeam(array $params): Created
    {
        $arguments = [];
        if (array_key_exists('team_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_id');
        }

        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\SyncLdapMappingForTeam($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Sync());

        return $operator->call($arguments['team_id']);
    }

    public function syncLdapMappingForUser(array $params): Json
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\EnterpriseAdmin\SyncLdapMappingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀Username🌀Sync());

        return $operator->call($arguments['username']);
    }

    public function createRegistrationTokenForEnterprise(array $params): AuthenticationToken
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken());

        return $operator->call($arguments['enterprise']);
    }

    public function createRemoveTokenForEnterprise(array $params): AuthenticationToken
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RemoveToken());

        return $operator->call($arguments['enterprise']);
    }

    public function startConfigurationProcess(array $params): WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\StartConfigurationProcess($this->browser, $this->authentication);

        return $operator->call();
    }

    public function enableOrDisableMaintenanceMode(array $params): MaintenanceStatus
    {
        $operator = new Internal\Operator\EnterpriseAdmin\EnableOrDisableMaintenanceMode($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance());

        return $operator->call($params);
    }

    public function createEnterpriseServerLicense(array $params): WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\CreateEnterpriseServerLicense($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($params);
    }

    public function upgradeLicense(array $params): WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\UpgradeLicense($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($params);
    }
}
