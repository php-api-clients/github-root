<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Get;

use ApiClients\Client\GitHubEnterprise\Internal;
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
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return iterable<int,Schema\GlobalHook> */
    public function listGlobalWebhooks(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('accept', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: accept');
        }

        $arguments['accept'] = $params['accept'];
        unset($params['accept']);
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListGlobalWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());

        return $operator->call($arguments['accept'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<int,Schema\PublicKeyFull> */
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListPublicKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Keys());

        return $operator->call($arguments['since'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return iterable<int,Schema\PreReceiveEnvironment> */
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListPreReceiveEnvironments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());

        return $operator->call($arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return iterable<int,Schema\PreReceiveHook> */
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListPreReceiveHooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks());

        return $operator->call($arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return iterable<int,Schema\Authorization> */
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListPersonalAccessTokens($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Tokens());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function getAnnouncement(array $params): Announcement
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetAnnouncement($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement());

        return $operator->call();
    }

    public function getGlobalWebhook(array $params): GlobalHook
    {
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists('accept', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: accept');
        }

        $arguments['accept'] = $params['accept'];
        unset($params['accept']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetGlobalWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId());

        return $operator->call($arguments['hook_id'], $arguments['accept']);
    }

    public function getPreReceiveEnvironment(array $params): PreReceiveEnvironment
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());

        return $operator->call($arguments['pre_receive_environment_id']);
    }

    public function getPreReceiveHook(array $params): PreReceiveHook
    {
        $arguments = [];
        if (array_key_exists('pre_receive_hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_hook_id');
        }

        $arguments['pre_receive_hook_id'] = $params['pre_receive_hook_id'];
        unset($params['pre_receive_hook_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetPreReceiveHook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId());

        return $operator->call($arguments['pre_receive_hook_id']);
    }

    public function getLicenseInformation(array $params): LicenseInfo
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetLicenseInformation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Settings🌀License());

        return $operator->call();
    }

    public function getAllStats(array $params): EnterpriseOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetAllStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀All());

        return $operator->call();
    }

    public function getCommentStats(array $params): EnterpriseCommentOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetCommentStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments());

        return $operator->call();
    }

    public function getGistStats(array $params): EnterpriseGistOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetGistStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists());

        return $operator->call();
    }

    public function getHooksStats(array $params): EnterpriseHookOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetHooksStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks());

        return $operator->call();
    }

    public function getIssueStats(array $params): EnterpriseIssueOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetIssueStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues());

        return $operator->call();
    }

    public function getMilestoneStats(array $params): EnterpriseMilestoneOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetMilestoneStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones());

        return $operator->call();
    }

    public function getOrgStats(array $params): EnterpriseOrganizationOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetOrgStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs());

        return $operator->call();
    }

    public function getPagesStats(array $params): EnterprisePageOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetPagesStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages());

        return $operator->call();
    }

    public function getPullRequestStats(array $params): EnterprisePullRequestOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetPullRequestStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls());

        return $operator->call();
    }

    public function getRepoStats(array $params): EnterpriseRepositoryOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetRepoStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos());

        return $operator->call();
    }

    public function getUserStats(array $params): EnterpriseUserOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetUserStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Users());

        return $operator->call();
    }

    /** @return iterable<int,Schema\OrgPreReceiveHook> */
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListPreReceiveHooksForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks());

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    public function getConfigurationStatus(array $params): ConfigurationStatus
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetConfigurationStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Configcheck());

        return $operator->call();
    }

    public function getMaintenanceStatus(array $params): MaintenanceStatus
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetMaintenanceStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance());

        return $operator->call();
    }

    public function getSettings(array $params): EnterpriseSettings
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetSettings($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings());

        return $operator->call();
    }

    public function getDownloadStatusForPreReceiveEnvironment(array $params): PreReceiveEnvironmentDownloadStatus
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest());

        return $operator->call($arguments['pre_receive_environment_id']);
    }

    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(array $params): Ok
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations());

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    public function getAllowedActionsEnterprise(array $params): SelectedActions
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetAllowedActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions());

        return $operator->call($arguments['enterprise']);
    }

    public function getSelfHostedRunnerGroupForEnterprise(array $params): RunnerGroupsEnterprise
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
        $operator = new Internal\Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id']);
    }

    /** @return iterable<int,Schema\RunnerApplication> */
    public function listRunnerApplicationsForEnterprise(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads());

        return $operator->call($arguments['enterprise']);
    }

    public function getSelfHostedRunnerForEnterprise(array $params): Runner
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
        $operator = new Internal\Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId());

        return $operator->call($arguments['enterprise'], $arguments['runner_id']);
    }

    public function getPreReceiveHookForRepo(array $params): RepositoryPreReceiveHook
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
        $operator = new Internal\Operator\EnterpriseAdmin\GetPreReceiveHookForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pre_receive_hook_id']);
    }

    public function getGithubActionsPermissionsEnterprise(array $params): ActionsEnterprisePermissions
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions());

        return $operator->call($arguments['enterprise']);
    }

    public function listSelfHostedRunnerGroupsForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    public function listSelfHostedRunnersForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners());

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    public function getPreReceiveHookForOrg(array $params): OrgPreReceiveHook
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
        $operator = new Internal\Operator\EnterpriseAdmin\GetPreReceiveHookForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId());

        return $operator->call($arguments['org'], $arguments['pre_receive_hook_id']);
    }

    /** @return iterable<int,Schema\RepositoryPreReceiveHook> */
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListPreReceiveHooksForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return iterable<int,Schema\SshKey> */
    public function getAllAuthorizedSshKeys(array $params): iterable
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetAllAuthorizedSshKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys());

        return $operator->call();
    }

    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(array $params): Json
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations());

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['per_page'], $arguments['page']);
    }

    public function listSelfHostedRunnersInGroupForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['per_page'], $arguments['page']);
    }
}
