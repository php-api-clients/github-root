<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Post;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\AuthenticationToken;
use ApiClients\Client\GitHubAE\Schema\Authorization;
use ApiClients\Client\GitHubAE\Schema\GlobalHook;
use ApiClients\Client\GitHubAE\Schema\OrganizationSimple;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class EnterpriseAdmin
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function createGlobalWebhook(array $params): GlobalHook|array
    {
        $operator = new Internal\Operator\EnterpriseAdmin\CreateGlobalWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());

        return $operator->call($params);
    }

    /** @return */
    public function createOrg(array $params): OrganizationSimple|array
    {
        $operator = new Internal\Operator\EnterpriseAdmin\CreateOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations());

        return $operator->call($params);
    }

    /** @return */
    public function createPreReceiveEnvironment(array $params): PreReceiveEnvironment|array
    {
        $operator = new Internal\Operator\EnterpriseAdmin\CreatePreReceiveEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());

        return $operator->call($params);
    }

    /** @return array{code:int} */
    public function pingGlobalWebhook(array $params): array
    {
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\PingGlobalWebhook($this->browser, $this->authentication);

        return $operator->call($arguments['hook_id']);
    }

    /** @return */
    public function startPreReceiveEnvironmentDownload(array $params): PreReceiveEnvironmentDownloadStatus|array
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

    /** @return */
    public function createImpersonationOAuthToken(array $params): Authorization|array
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

    /** @return */
    public function createSelfHostedRunnerGroupForEnterprise(array $params): RunnerGroupsEnterprise|array
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

    /** @return */
    public function createRegistrationTokenForEnterprise(array $params): AuthenticationToken|array
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

    /** @return */
    public function createRemoveTokenForEnterprise(array $params): AuthenticationToken|array
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
}
