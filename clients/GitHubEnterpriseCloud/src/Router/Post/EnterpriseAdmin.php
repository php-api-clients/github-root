<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Router\Post;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrators;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AuthenticationToken;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\Applicationjson\H200;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RunnerGroupsEnterprise;
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

    public function addCustomLabelsToSelfHostedRunnerForEnterprise(array $params)
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
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels();
        }

        $operation = new Operation\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels::class], $arguments['enterprise'], $arguments['runner_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): H200 {
            return $operation->createResponse($response);
        });
    }
}
