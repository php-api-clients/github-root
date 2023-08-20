<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\AuthenticationToken;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg;
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
    public function createSelfHostedRunnerGroupForOrg(array $params): RunnerGroupsOrg|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\RunnerGroups::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\RunnerGroups::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RunnerGroups();
        }

        $operator = new Operator\Actions\CreateSelfHostedRunnerGroupForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\RunnerGroups::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function createRegistrationTokenForOrg(array $params): AuthenticationToken|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken();
        }

        $operator = new Operator\Actions\CreateRegistrationTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken::class]);

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function createRemoveTokenForOrg(array $params): AuthenticationToken|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken();
        }

        $operator = new Operator\Actions\CreateRemoveTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken::class]);

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function cancelWorkflowRun(array $params): EmptyObject|array
    {
        $matched   = true;
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel();
        }

        $operator = new Operator\Actions\CancelWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    /** @return iterable<Schema\Deployment> */
    public function reviewPendingDeploymentsForRun(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\PendingDeployments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\PendingDeployments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments();
        }

        $operator = new Operator\Actions\ReviewPendingDeploymentsForRun($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\PendingDeployments::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id'], $params);
    }

    /** @return */
    public function reRunWorkflow(array $params): EmptyObject|array
    {
        $matched   = true;
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun();
        }

        $operator = new Operator\Actions\ReRunWorkflow($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id'], $params);
    }

    /** @return array{code: int} */
    public function createWorkflowDispatch(array $params): array
    {
        $matched   = true;
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
        if (array_key_exists('workflow_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: workflow_id');
        }

        $arguments['workflow_id'] = $params['workflow_id'];
        unset($params['workflow_id']);
        $operator = new Operator\Actions\CreateWorkflowDispatch($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['workflow_id'], $params);
    }

    /** @return */
    public function createRegistrationTokenForRepo(array $params): AuthenticationToken|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken();
        }

        $operator = new Operator\Actions\CreateRegistrationTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function createRemoveTokenForRepo(array $params): AuthenticationToken|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken();
        }

        $operator = new Operator\Actions\CreateRemoveTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }
}
