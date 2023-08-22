<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrators;
use ApiClients\Client\GitHubEnterpriseCloud\Operator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Runner;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SelectedActions;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class EnterpriseAdmin
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\ServerStatistics> */
    public function getServerStatistics(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\EnterpriseInstallation\EnterpriseOrOrg\ServerStatistics::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\EnterpriseInstallation\EnterpriseOrOrg\ServerStatistics::class] = $this->hydrators->getObjectMapperOperation🌀EnterpriseInstallation🌀EnterpriseOrOrg🌀ServerStatistics();
        }

        $operator = new Operator\EnterpriseAdmin\GetServerStatistics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\EnterpriseInstallation\EnterpriseOrOrg\ServerStatistics::class]);

        return $operator->call($arguments['enterprise_or_org'], $arguments['date_start'], $arguments['date_end']);
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function getAuditLog(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\AuditLog::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\AuditLog::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀AuditLog();
        }

        $operator = new Operator\EnterpriseAdmin\GetAuditLog($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\AuditLog::class]);

        return $operator->call($arguments['enterprise'], $arguments['phrase'], $arguments['include'], $arguments['after'], $arguments['before'], $arguments['order'], $arguments['page'], $arguments['per_page']);
    }

    /** @return */
    public function getConsumedLicenses(array $params): string|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\ConsumedLicenses::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\ConsumedLicenses::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀ConsumedLicenses();
        }

        $operator = new Operator\EnterpriseAdmin\GetConsumedLicenses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\ConsumedLicenses::class]);

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getLicenseSyncStatus(array $params): string|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\LicenseSyncStatus::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\LicenseSyncStatus::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀LicenseSyncStatus();
        }

        $operator = new Operator\EnterpriseAdmin\GetLicenseSyncStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\LicenseSyncStatus::class]);

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function getGithubActionsPermissionsEnterprise(array $params): ActionsEnterprisePermissions|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions();
        }

        $operator = new Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions::class]);

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function listSelfHostedRunnerGroupsForEnterprise(array $params): Ok|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups();
        }

        $operator = new Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups::class]);

        return $operator->call($arguments['enterprise'], $arguments['visible_to_organization'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listSelfHostedRunnersForEnterprise(array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\Runners::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners();
        }

        $operator = new Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners::class]);

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\Organizations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\Organizations::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations();
        }

        $operator = new Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\Organizations::class]);

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getAllowedActionsEnterprise(array $params): SelectedActions|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\SelectedActions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\SelectedActions::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions();
        }

        $operator = new Operator\EnterpriseAdmin\GetAllowedActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Permissions\SelectedActions::class]);

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function getSelfHostedRunnerGroupForEnterprise(array $params): RunnerGroupsEnterprise|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId();
        }

        $operator = new Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId::class]);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id']);
    }

    /** @return Observable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForEnterprise(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\Downloads::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\Downloads::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads();
        }

        $operator = new Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\Downloads::class]);

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function getSelfHostedRunnerForEnterprise(array $params): Runner|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId();
        }

        $operator = new Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId::class]);

        return $operator->call($arguments['enterprise'], $arguments['runner_id']);
    }

    /** @return */
    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(array $params): Json|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Organizations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Organizations::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations();
        }

        $operator = new Operator\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Organizations::class]);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listSelfHostedRunnersInGroupForEnterprise(array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Runners::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Runners::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners();
        }

        $operator = new Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId\Runners::class]);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listLabelsForSelfHostedRunnerForEnterprise(array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId\Labels::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId\Labels::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels();
        }

        $operator = new Operator\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\Runners\RunnerId\Labels::class]);

        return $operator->call($arguments['enterprise'], $arguments['runner_id']);
    }
}
