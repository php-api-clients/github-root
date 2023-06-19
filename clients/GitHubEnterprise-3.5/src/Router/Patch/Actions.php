<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Patch;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Actions
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrators $hydrators, private readonly Browser $browser, private readonly AuthenticationInterface $authentication)
    {
    }

    public function setActionsCacheUsagePolicyForEnterprise(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Operator\Actions\SetActionsCacheUsagePolicyForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['enterprise'], $params);
    }

    public function updateSelfHostedRunnerGroupForOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups🌀RunnerGroupId();
        }

        $operator = new Operator\Actions\UpdateSelfHostedRunnerGroupForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId::class]);

        return $operator->call($arguments['org'], $arguments['runner_group_id'], $params);
    }

    public function setActionsCacheUsagePolicy(array $params)
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
        $operator = new Operator\Actions\SetActionsCacheUsagePolicy($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }
}
