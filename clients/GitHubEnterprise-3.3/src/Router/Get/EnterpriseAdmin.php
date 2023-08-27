<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubEnterprise\Schema\Announcement;
use ApiClients\Client\GitHubEnterprise\Schema\ConfigurationStatus;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;
use ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo;
use ApiClients\Client\GitHubEnterprise\Schema\MaintenanceStatus;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\Runner;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\SelectedActions;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class EnterpriseAdmin
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return iterable<Schema\GlobalHook> */
    public function listGlobalWebhooks(array $params): iterable
    {
        $arguments = [];
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
        $operator = new Operator\EnterpriseAdmin\ListGlobalWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\PublicKeyFull> */
    public function listPublicKeys(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
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
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        $operator = new Operator\EnterpriseAdmin\ListPublicKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Keys());

        return $operator->call($arguments['since'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return iterable<Schema\PreReceiveEnvironment> */
    public function listPreReceiveEnvironments(array $params): iterable
    {
        $arguments = [];
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
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        $operator = new Operator\EnterpriseAdmin\ListPreReceiveEnvironments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());

        return $operator->call($arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return iterable<Schema\PreReceiveHook> */
    public function listPreReceiveHooks(array $params): iterable
    {
        $arguments = [];
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
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        $operator = new Operator\EnterpriseAdmin\ListPreReceiveHooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks());

        return $operator->call($arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return iterable<Schema\Authorization> */
    public function listPersonalAccessTokens(array $params): iterable
    {
        $arguments = [];
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
        $operator = new Operator\EnterpriseAdmin\ListPersonalAccessTokens($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Tokens());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getAnnouncement(array $params): Announcement|array
    {
        $operator = new Operator\EnterpriseAdmin\GetAnnouncement($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement());

        return $operator->call();
    }

    /** @return */
    public function getGlobalWebhook(array $params): GlobalHook|array
    {
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        $operator = new Operator\EnterpriseAdmin\GetGlobalWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId());

        return $operator->call($arguments['hook_id']);
    }

    /** @return */
    public function getPreReceiveEnvironment(array $params): PreReceiveEnvironment|array
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        $operator = new Operator\EnterpriseAdmin\GetPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());

        return $operator->call($arguments['pre_receive_environment_id']);
    }

    /** @return */
    public function getPreReceiveHook(array $params): PreReceiveHook|array
    {
        $arguments = [];
        if (array_key_exists('pre_receive_hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_hook_id');
        }

        $arguments['pre_receive_hook_id'] = $params['pre_receive_hook_id'];
        unset($params['pre_receive_hook_id']);
        $operator = new Operator\EnterpriseAdmin\GetPreReceiveHook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId());

        return $operator->call($arguments['pre_receive_hook_id']);
    }

    /** @return */
    public function getLicenseInformation(array $params): LicenseInfo|array
    {
        $operator = new Operator\EnterpriseAdmin\GetLicenseInformation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Settings🌀License());

        return $operator->call();
    }

    /** @return */
    public function getAllStats(array $params): EnterpriseOverview|array
    {
        $operator = new Operator\EnterpriseAdmin\GetAllStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀All());

        return $operator->call();
    }

    /** @return */
    public function getCommentStats(array $params): EnterpriseCommentOverview|array
    {
        $operator = new Operator\EnterpriseAdmin\GetCommentStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments());

        return $operator->call();
    }

    /** @return */
    public function getGistStats(array $params): EnterpriseGistOverview|array
    {
        $operator = new Operator\EnterpriseAdmin\GetGistStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists());

        return $operator->call();
    }

    /** @return */
    public function getHooksStats(array $params): EnterpriseHookOverview|array
    {
        $operator = new Operator\EnterpriseAdmin\GetHooksStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks());

        return $operator->call();
    }

    /** @return */
    public function getIssueStats(array $params): EnterpriseIssueOverview|array
    {
        $operator = new Operator\EnterpriseAdmin\GetIssueStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues());

        return $operator->call();
    }

    /** @return */
    public function getMilestoneStats(array $params): EnterpriseMilestoneOverview|array
    {
        $operator = new Operator\EnterpriseAdmin\GetMilestoneStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones());

        return $operator->call();
    }

    /** @return */
    public function getOrgStats(array $params): EnterpriseOrganizationOverview|array
    {
        $operator = new Operator\EnterpriseAdmin\GetOrgStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs());

        return $operator->call();
    }

    /** @return */
    public function getPagesStats(array $params): EnterprisePageOverview|array
    {
        $operator = new Operator\EnterpriseAdmin\GetPagesStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages());

        return $operator->call();
    }

    /** @return */
    public function getPullRequestStats(array $params): EnterprisePullRequestOverview|array
    {
        $operator = new Operator\EnterpriseAdmin\GetPullRequestStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls());

        return $operator->call();
    }

    /** @return */
    public function getRepoStats(array $params): EnterpriseRepositoryOverview|array
    {
        $operator = new Operator\EnterpriseAdmin\GetRepoStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos());

        return $operator->call();
    }

    /** @return */
    public function getUserStats(array $params): EnterpriseUserOverview|array
    {
        $operator = new Operator\EnterpriseAdmin\GetUserStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Users());

        return $operator->call();
    }

    /** @return iterable<Schema\AuditLogEvent> */
    public function getAuditLog(array $params): iterable
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
        $operator = new Operator\EnterpriseAdmin\GetAuditLog($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀AuditLog());

        return $operator->call($arguments['enterprise'], $arguments['phrase'], $arguments['after'], $arguments['before'], $arguments['order'], $arguments['page'], $arguments['per_page']);
    }

    /** @return iterable<Schema\OrgPreReceiveHook> */
    public function listPreReceiveHooksForOrg(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
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
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        $operator = new Operator\EnterpriseAdmin\ListPreReceiveHooksForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks());

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return */
    public function getConfigurationStatus(array $params): ConfigurationStatus|array
    {
        $operator = new Operator\EnterpriseAdmin\GetConfigurationStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Configcheck());

        return $operator->call();
    }

    /** @return */
    public function getMaintenanceStatus(array $params): MaintenanceStatus|array
    {
        $operator = new Operator\EnterpriseAdmin\GetMaintenanceStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance());

        return $operator->call();
    }

    /** @return */
    public function getSettings(array $params): EnterpriseSettings|array
    {
        $operator = new Operator\EnterpriseAdmin\GetSettings($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings());

        return $operator->call();
    }

    /** @return */
    public function getDownloadStatusForPreReceiveEnvironment(array $params): PreReceiveEnvironmentDownloadStatus|array
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        $operator = new Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest());

        return $operator->call($arguments['pre_receive_environment_id']);
    }

    /** @return */
    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(array $params): Ok|array
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
        $operator = new Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations());

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getAllowedActionsEnterprise(array $params): SelectedActions|array
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Operator\EnterpriseAdmin\GetAllowedActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions());

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function getSelfHostedRunnerGroupForEnterprise(array $params): RunnerGroupsEnterprise|array
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
        $operator = new Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id']);
    }

    /** @return iterable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForEnterprise(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads());

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function getSelfHostedRunnerForEnterprise(array $params): Runner|array
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
        $operator = new Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId());

        return $operator->call($arguments['enterprise'], $arguments['runner_id']);
    }

    /** @return */
    public function getPreReceiveHookForRepo(array $params): RepositoryPreReceiveHook|array
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
        $operator = new Operator\EnterpriseAdmin\GetPreReceiveHookForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pre_receive_hook_id']);
    }

    /** @return */
    public function getGithubActionsPermissionsEnterprise(array $params): ActionsEnterprisePermissions|array
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions());

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function listSelfHostedRunnerGroupsForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok|array
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
        $operator = new Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listSelfHostedRunnersForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|array
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
        $operator = new Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners());

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getPreReceiveHookForOrg(array $params): OrgPreReceiveHook|array
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
        $operator = new Operator\EnterpriseAdmin\GetPreReceiveHookForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId());

        return $operator->call($arguments['org'], $arguments['pre_receive_hook_id']);
    }

    /** @return iterable<Schema\RepositoryPreReceiveHook> */
    public function listPreReceiveHooksForRepo(array $params): iterable
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
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        $operator = new Operator\EnterpriseAdmin\ListPreReceiveHooksForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return iterable<Schema\SshKey> */
    public function getAllAuthorizedSshKeys(array $params): iterable
    {
        $operator = new Operator\EnterpriseAdmin\GetAllAuthorizedSshKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys());

        return $operator->call();
    }

    /** @return */
    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(array $params): Json|array
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
        $operator = new Operator\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations());

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listSelfHostedRunnersInGroupForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok|array
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
        $operator = new Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['per_page'], $arguments['page']);
    }
}
