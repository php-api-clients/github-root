<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Patch;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg;
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

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function updateSelfHostedRunnerGroupForOrg(array $params): RunnerGroupsOrg|array
    {
        $matched   = true;
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
}
