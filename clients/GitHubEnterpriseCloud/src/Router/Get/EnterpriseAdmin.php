<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrators;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Runner;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SelectedActions;
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

    public function getServerStatistics(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise_or_org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise_or_org');
        }

        $arguments['enterprise_or_org'] = $params['enterprise_or_org'];
        unset($params['enterprise_or_org']);
        if (array_key_exists('date_start', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: date_start');
        }

        $arguments['date_start'] = $params['date_start'];
        unset($params['date_start']);
        if (array_key_exists('date_end', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: date_end');
        }

        $arguments['date_end'] = $params['date_end'];
        unset($params['date_end']);
        if (array_key_exists(Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb\ServerDashStatistics::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb\ServerDashStatistics::class] = $this->hydrators->getObjectMapperOperation🌀EnterpriseDashInstallation🌀CbEnterpriseOrOrgRcb🌀ServerDashStatistics();
        }

        $operation = new Operation\EnterpriseAdmin\GetServerStatistics($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb\ServerDashStatistics::class], $arguments['enterprise_or_org'], $arguments['date_start'], $arguments['date_end']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function getAuditLog(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('phrase', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: phrase');
        }

        $arguments['phrase'] = $params['phrase'];
        unset($params['phrase']);
        if (array_key_exists('include', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: include');
        }

        $arguments['include'] = $params['include'];
        unset($params['include']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('order', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: order');
        }

        $arguments['order'] = $params['order'];
        unset($params['order']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog();
        }

        $operation = new Operation\EnterpriseAdmin\GetAuditLog($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog::class], $arguments['enterprise'], $arguments['phrase'], $arguments['include'], $arguments['after'], $arguments['before'], $arguments['order'], $arguments['page'], $arguments['per_page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function getConsumedLicenses(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\ConsumedLicenses::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\ConsumedLicenses::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀ConsumedLicenses();
        }

        $operation = new Operation\EnterpriseAdmin\GetConsumedLicenses($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\ConsumedLicenses::class], $arguments['enterprise'], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GetConsumedLicenses {
            return $operation->createResponse($response);
        });
    }

    public function getLicenseSyncStatus(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\LicenseSyncStatus::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\LicenseSyncStatus::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀LicenseSyncStatus();
        }

        $operation = new Operation\EnterpriseAdmin\GetLicenseSyncStatus($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\LicenseSyncStatus::class], $arguments['enterprise']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GetLicenseSyncStatus {
            return $operation->createResponse($response);
        });
    }

    public function getGithubActionsPermissionsEnterprise(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions();
        }

        $operation = new Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions::class], $arguments['enterprise']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsEnterprisePermissions {
            return $operation->createResponse($response);
        });
    }

    public function listSelfHostedRunnerGroupsForEnterprise(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('visible_to_organization', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: visible_to_organization');
        }

        $arguments['visible_to_organization'] = $params['visible_to_organization'];
        unset($params['visible_to_organization']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups();
        }

        $operation = new Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups::class], $arguments['enterprise'], $arguments['visible_to_organization'], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): H200 {
            return $operation->createResponse($response);
        });
    }

    public function listSelfHostedRunnersForEnterprise(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners();
        }

        $operation = new Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners::class], $arguments['enterprise'], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }

    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations();
        }

        $operation = new Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations::class], $arguments['enterprise'], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }

    public function getAllowedActionsEnterprise(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\SelectedActions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\SelectedActions::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions();
        }

        $operation = new Operation\EnterpriseAdmin\GetAllowedActionsEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\SelectedActions::class], $arguments['enterprise']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): SelectedActions {
            return $operation->createResponse($response);
        });
    }

    public function getSelfHostedRunnerGroupForEnterprise(array $params)
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
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb();
        }

        $operation = new Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb::class], $arguments['enterprise'], $arguments['runner_group_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RunnerGroupsEnterprise {
            return $operation->createResponse($response);
        });
    }

    public function listRunnerApplicationsForEnterprise(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\Downloads::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\Downloads::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads();
        }

        $operation = new Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\Downloads::class], $arguments['enterprise']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function getSelfHostedRunnerForEnterprise(array $params)
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
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb();
        }

        $operation = new Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb::class], $arguments['enterprise'], $arguments['runner_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Runner {
            return $operation->createResponse($response);
        });
    }

    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(array $params)
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
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations();
        }

        $operation = new Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations::class], $arguments['enterprise'], $arguments['runner_group_id'], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }

    public function listSelfHostedRunnersInGroupForEnterprise(array $params)
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
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners();
        }

        $operation = new Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners::class], $arguments['enterprise'], $arguments['runner_group_id'], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }

    public function listLabelsForSelfHostedRunnerForEnterprise(array $params)
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

        $operation = new Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels::class], $arguments['enterprise'], $arguments['runner_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
}
