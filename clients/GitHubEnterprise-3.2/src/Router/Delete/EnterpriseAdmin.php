<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

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

    public function deleteGlobalWebhook(array $params)
    {
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        $operation = new Operation\EnterpriseAdmin\DeleteGlobalWebhook($arguments['hook_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function deletePublicKey(array $params)
    {
        $arguments = [];
        if (array_key_exists('key_ids', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key_ids');
        }

        $arguments['key_ids'] = $params['key_ids'];
        unset($params['key_ids']);
        $operation = new Operation\EnterpriseAdmin\DeletePublicKey($arguments['key_ids']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function deletePreReceiveEnvironment(array $params)
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb();
        }

        $operation = new Operation\EnterpriseAdmin\DeletePreReceiveEnvironment($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb::class], $arguments['pre_receive_environment_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function deletePreReceiveHook(array $params)
    {
        $arguments = [];
        if (array_key_exists('pre_receive_hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_hook_id');
        }

        $arguments['pre_receive_hook_id'] = $params['pre_receive_hook_id'];
        unset($params['pre_receive_hook_id']);
        $operation = new Operation\EnterpriseAdmin\DeletePreReceiveHook($arguments['pre_receive_hook_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function deletePersonalAccessToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('token_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: token_id');
        }

        $arguments['token_id'] = $params['token_id'];
        unset($params['token_id']);
        $operation = new Operation\EnterpriseAdmin\DeletePersonalAccessToken($arguments['token_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function deleteUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operation = new Operation\EnterpriseAdmin\DeleteUser($arguments['username']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function demoteSiteAdministrator(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operation = new Operation\EnterpriseAdmin\DemoteSiteAdministrator($arguments['username']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function unsuspendUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operation = new Operation\EnterpriseAdmin\UnsuspendUser($this->requestSchemaValidator, $arguments['username']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function deleteImpersonationOAuthToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operation = new Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken($arguments['username']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function removePreReceiveHookEnforcementForOrg(array $params)
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
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb();
        }

        $operation = new Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb::class], $arguments['org'], $arguments['pre_receive_hook_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrgPreReceiveHook {
            return $operation->createResponse($response);
        });
    }

    public function removeAuthorizedSshKey(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class] = $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys();
        }

        $operation = new Operation\EnterpriseAdmin\RemoveAuthorizedSshKey($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function removeAnnouncement(array $params)
    {
        $arguments = [];
        $operation = new Operation\EnterpriseAdmin\RemoveAnnouncement();
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function disableSelectedOrganizationGithubActionsEnterprise(array $params)
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
        $operation = new Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise($arguments['enterprise'], $arguments['org_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function deleteSelfHostedRunnerGroupFromEnterprise(array $params)
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
        $operation = new Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise($arguments['enterprise'], $arguments['runner_group_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function deleteSelfHostedRunnerFromEnterprise(array $params)
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
        $operation = new Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($arguments['enterprise'], $arguments['runner_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function removePreReceiveHookEnforcementForRepo(array $params)
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
        if (array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb();
        }

        $operation = new Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb::class], $arguments['owner'], $arguments['repo'], $arguments['pre_receive_hook_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepositoryPreReceiveHook {
            return $operation->createResponse($response);
        });
    }

    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise(array $params)
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
        $operation = new Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise($arguments['enterprise'], $arguments['runner_group_id'], $arguments['org_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function removeSelfHostedRunnerFromGroupForEnterprise(array $params)
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
        $operation = new Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise($arguments['enterprise'], $arguments['runner_group_id'], $arguments['runner_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
