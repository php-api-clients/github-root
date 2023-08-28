<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Post;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AuthenticationToken;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RunnerGroupsEnterprise;
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

    /** @return Schema\AuthenticationToken */
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

    /** @return Schema\AuthenticationToken */
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

    /** @return Schema\RunnerGroupsEnterprise */
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

    /** @return Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok */
    public function addCustomLabelsToSelfHostedRunnerForEnterprise(array $params): Ok|array
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
        $operator = new Internal\Operator\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels());

        return $operator->call($arguments['enterprise'], $arguments['runner_id'], $params);
    }
}
