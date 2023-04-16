<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Post;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema\AuthenticationToken;
use ApiClients\Client\GitHubAE\Schema\Authorization;
use ApiClients\Client\GitHubAE\Schema\GlobalHook;
use ApiClients\Client\GitHubAE\Schema\OrganizationSimple;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
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
        if (array_key_exists(Hydrator\Operation\Admin\Hooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks();
        }

        $operation = new Operation\EnterpriseAdmin\CreateGlobalWebhook($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Hooks::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GlobalHook {
            return $operation->createResponse($response);
        });
    }

    public function createOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Admin\Organizations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Organizations::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations();
        }

        $operation = new Operation\EnterpriseAdmin\CreateOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Organizations::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrganizationSimple {
            return $operation->createResponse($response);
        });
    }

    public function createPreReceiveEnvironment(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveEnvironments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments();
        }

        $operation = new Operation\EnterpriseAdmin\CreatePreReceiveEnvironment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PreReceiveEnvironment {
            return $operation->createResponse($response);
        });
    }

    public function pingGlobalWebhook(array $params)
    {
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        $operation = new Operation\EnterpriseAdmin\PingGlobalWebhook($arguments['hook_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function startPreReceiveEnvironmentDownload(array $params)
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads();
        }

        $operation = new Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class], $arguments['pre_receive_environment_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PreReceiveEnvironmentDownloadStatus {
            return $operation->createResponse($response);
        });
    }

    public function createImpersonationOAuthToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Admin\Users\CbUsernameRcb\Authorizations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Users\CbUsernameRcb\Authorizations::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀CbUsernameRcb🌀Authorizations();
        }

        $operation = new Operation\EnterpriseAdmin\CreateImpersonationOAuthToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Users\CbUsernameRcb\Authorizations::class], $arguments['username']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization {
            return $operation->createResponse($response);
        });
    }

    public function createSelfHostedRunnerGroupForEnterprise(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups();
        }

        $operation = new Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups::class], $arguments['enterprise']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RunnerGroupsEnterprise {
            return $operation->createResponse($response);
        });
    }

    public function createRegistrationTokenForEnterprise(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken();
        }

        $operation = new Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken::class], $arguments['enterprise']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AuthenticationToken {
            return $operation->createResponse($response);
        });
    }

    public function createRemoveTokenForEnterprise(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RemoveToken::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RemoveToken::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RemoveToken();
        }

        $operation = new Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RemoveToken::class], $arguments['enterprise']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AuthenticationToken {
            return $operation->createResponse($response);
        });
    }

    public function startPreReceiveEnvironmentDownloadStreaming(array $params)
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads();
        }

        $operation = new Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads::class], $this->browser, $arguments['pre_receive_environment_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PreReceiveEnvironmentDownloadStatus {
            return $operation->createResponse($response);
        });
    }
}
