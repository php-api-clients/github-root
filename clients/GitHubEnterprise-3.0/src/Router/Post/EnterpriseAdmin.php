<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\ChunkSize;
final class EnterpriseAdmin
{
    /**
     * @var array<class-string, \EventSauce\ObjectHydrator\ObjectMapper>
     */
    private array $hydrator = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHubEnterprise\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHubEnterprise\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function createGlobalWebhook(array $params)
    {
        $arguments = array();
        if (array_key_exists('accept', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: accept');
        }
        $arguments['accept'] = $params['accept'];
        unset($params['accept']);
        if (\array_key_exists(Hydrator\Operation\Admin\Hooks::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Admin\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks();
        }
        $operation = new Operation\EnterpriseAdmin\CreateGlobalWebhook($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Hooks::class], $arguments['accept']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\GlobalHook {
            return $operation->createResponse($response);
        });
    }
    public function createOrg(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\Admin\Organizations::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Admin\Organizations::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations();
        }
        $operation = new Operation\EnterpriseAdmin\CreateOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Organizations::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\OrganizationSimple {
            return $operation->createResponse($response);
        });
    }
    public function createPreReceiveEnvironment(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\Admin\PreReceiveEnvironments::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments();
        }
        $operation = new Operation\EnterpriseAdmin\CreatePreReceiveEnvironment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment {
            return $operation->createResponse($response);
        });
    }
    public function createPreReceiveHook(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\Admin\PreReceiveHooks::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks();
        }
        $operation = new Operation\EnterpriseAdmin\CreatePreReceiveHook($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook {
            return $operation->createResponse($response);
        });
    }
    public function createUser(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\Admin\Users::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Admin\Users::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Users();
        }
        $operation = new Operation\EnterpriseAdmin\CreateUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Users::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\SimpleUser {
            return $operation->createResponse($response);
        });
    }
    public function pingGlobalWebhook(array $params)
    {
        $arguments = array();
        if (array_key_exists('hook_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: hook_id');
        }
        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists('accept', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: accept');
        }
        $arguments['accept'] = $params['accept'];
        unset($params['accept']);
        $operation = new Operation\EnterpriseAdmin\PingGlobalWebhook($arguments['hook_id'], $arguments['accept']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function startPreReceiveEnvironmentDownload(array $params)
    {
        $arguments = array();
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }
        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (\array_key_exists(Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads();
        }
        $operation = new Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class], $arguments['pre_receive_environment_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus {
            return $operation->createResponse($response);
        });
    }
    public function createImpersonationOAuthToken(array $params)
    {
        $arguments = array();
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (\array_key_exists(Hydrator\Operation\Admin\Users\CbUsernameRcb\Authorizations::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Admin\Users\CbUsernameRcb\Authorizations::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀CbUsernameRcb🌀Authorizations();
        }
        $operation = new Operation\EnterpriseAdmin\CreateImpersonationOAuthToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Users\CbUsernameRcb\Authorizations::class], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\Authorization {
            return $operation->createResponse($response);
        });
    }
    public function createSelfHostedRunnerGroupForEnterprise(array $params)
    {
        $arguments = array();
        if (array_key_exists('enterprise', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: enterprise');
        }
        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (\array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups();
        }
        $operation = new Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups::class], $arguments['enterprise']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise {
            return $operation->createResponse($response);
        });
    }
    public function addAuthorizedSshKey(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class] = $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys();
        }
        $operation = new Operation\EnterpriseAdmin\AddAuthorizedSshKey($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function syncLdapMappingForTeam(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (\array_key_exists(Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Sync::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Sync::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Sync();
        }
        $operation = new Operation\EnterpriseAdmin\SyncLdapMappingForTeam($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Sync::class], $arguments['team_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\SyncLdapMappingForTeam\Response\Applicationjson\H201 {
            return $operation->createResponse($response);
        });
    }
    public function syncLdapMappingForUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (\array_key_exists(Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Sync::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Sync::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Sync();
        }
        $operation = new Operation\EnterpriseAdmin\SyncLdapMappingForUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Sync::class], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\SyncLdapMappingForUser\Response\Applicationjson\H201 {
            return $operation->createResponse($response);
        });
    }
    public function createRegistrationTokenForEnterprise(array $params)
    {
        $arguments = array();
        if (array_key_exists('enterprise', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: enterprise');
        }
        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (\array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken();
        }
        $operation = new Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken::class], $arguments['enterprise']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\AuthenticationToken {
            return $operation->createResponse($response);
        });
    }
    public function createRemoveTokenForEnterprise(array $params)
    {
        $arguments = array();
        if (array_key_exists('enterprise', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: enterprise');
        }
        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (\array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RemoveToken::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RemoveToken::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RemoveToken();
        }
        $operation = new Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RemoveToken::class], $arguments['enterprise']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\AuthenticationToken {
            return $operation->createResponse($response);
        });
    }
    public function startConfigurationProcess(array $params)
    {
        $arguments = array();
        $operation = new Operation\EnterpriseAdmin\StartConfigurationProcess();
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function enableOrDisableMaintenanceMode(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\Setup\Api\Maintenance::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Setup\Api\Maintenance::class] = $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance();
        }
        $operation = new Operation\EnterpriseAdmin\EnableOrDisableMaintenanceMode($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Setup\Api\Maintenance::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\MaintenanceStatus {
            return $operation->createResponse($response);
        });
    }
    public function createEnterpriseServerLicense(array $params)
    {
        $arguments = array();
        $operation = new Operation\EnterpriseAdmin\CreateEnterpriseServerLicense($this->requestSchemaValidator);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function upgradeLicense(array $params)
    {
        $arguments = array();
        $operation = new Operation\EnterpriseAdmin\UpgradeLicense($this->requestSchemaValidator);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function startPreReceiveEnvironmentDownloadStreaming(array $params)
    {
        $arguments = array();
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }
        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (\array_key_exists(Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads();
        }
        $operation = new Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class], $this->browser, $arguments['pre_receive_environment_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus {
            return $operation->createResponse($response);
        });
    }
}
