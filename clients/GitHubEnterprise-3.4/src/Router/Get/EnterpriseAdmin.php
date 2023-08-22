<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrator;
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

    /** @return Observable<Schema\GlobalHook> */
    public function listGlobalWebhooks(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Admin\Hooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks();
        }

        $operator = new Operator\EnterpriseAdmin\ListGlobalWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Hooks::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\PublicKeyFull> */
    public function listPublicKeys(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Admin\Keys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Keys::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Keys();
        }

        $operator = new Operator\EnterpriseAdmin\ListPublicKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Keys::class]);

        return $operator->call($arguments['since'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return Observable<Schema\PreReceiveEnvironment> */
    public function listPreReceiveEnvironments(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveEnvironments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments();
        }

        $operator = new Operator\EnterpriseAdmin\ListPreReceiveEnvironments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class]);

        return $operator->call($arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return Observable<Schema\PreReceiveHook> */
    public function listPreReceiveHooks(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveHooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks();
        }

        $operator = new Operator\EnterpriseAdmin\ListPreReceiveHooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks::class]);

        return $operator->call($arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return Observable<Schema\Authorization> */
    public function listPersonalAccessTokens(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Admin\Tokens::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Tokens::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Tokens();
        }

        $operator = new Operator\EnterpriseAdmin\ListPersonalAccessTokens($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Tokens::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getAnnouncement(array $params): Announcement|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Announcement::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Announcement::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement();
        }

        $operator = new Operator\EnterpriseAdmin\GetAnnouncement($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Announcement::class]);

        return $operator->call();
    }

    /** @return */
    public function getGlobalWebhook(array $params): GlobalHook|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists(Hydrator\Operation\Admin\Hooks\HookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Hooks\HookId::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId();
        }

        $operator = new Operator\EnterpriseAdmin\GetGlobalWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Hooks\HookId::class]);

        return $operator->call($arguments['hook_id']);
    }

    /** @return */
    public function getPreReceiveEnvironment(array $params): PreReceiveEnvironment|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId();
        }

        $operator = new Operator\EnterpriseAdmin\GetPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId::class]);

        return $operator->call($arguments['pre_receive_environment_id']);
    }

    /** @return */
    public function getPreReceiveHook(array $params): PreReceiveHook|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('pre_receive_hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_hook_id');
        }

        $arguments['pre_receive_hook_id'] = $params['pre_receive_hook_id'];
        unset($params['pre_receive_hook_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveHooks\PreReceiveHookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks\PreReceiveHookId::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId();
        }

        $operator = new Operator\EnterpriseAdmin\GetPreReceiveHook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks\PreReceiveHookId::class]);

        return $operator->call($arguments['pre_receive_hook_id']);
    }

    /** @return */
    public function getLicenseInformation(array $params): LicenseInfo|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Settings\License::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Settings\License::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Settings🌀License();
        }

        $operator = new Operator\EnterpriseAdmin\GetLicenseInformation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Settings\License::class]);

        return $operator->call();
    }

    /** @return */
    public function getAllStats(array $params): EnterpriseOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\All::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\All::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀All();
        }

        $operator = new Operator\EnterpriseAdmin\GetAllStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\All::class]);

        return $operator->call();
    }

    /** @return */
    public function getCommentStats(array $params): EnterpriseCommentOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments();
        }

        $operator = new Operator\EnterpriseAdmin\GetCommentStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Comments::class]);

        return $operator->call();
    }

    /** @return */
    public function getGistStats(array $params): EnterpriseGistOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Gists::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Gists::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists();
        }

        $operator = new Operator\EnterpriseAdmin\GetGistStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Gists::class]);

        return $operator->call();
    }

    /** @return */
    public function getHooksStats(array $params): EnterpriseHookOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Hooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks();
        }

        $operator = new Operator\EnterpriseAdmin\GetHooksStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Hooks::class]);

        return $operator->call();
    }

    /** @return */
    public function getIssueStats(array $params): EnterpriseIssueOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Issues::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Issues::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues();
        }

        $operator = new Operator\EnterpriseAdmin\GetIssueStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Issues::class]);

        return $operator->call();
    }

    /** @return */
    public function getMilestoneStats(array $params): EnterpriseMilestoneOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Milestones::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Milestones::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones();
        }

        $operator = new Operator\EnterpriseAdmin\GetMilestoneStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Milestones::class]);

        return $operator->call();
    }

    /** @return */
    public function getOrgStats(array $params): EnterpriseOrganizationOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Orgs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Orgs::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs();
        }

        $operator = new Operator\EnterpriseAdmin\GetOrgStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Orgs::class]);

        return $operator->call();
    }

    /** @return */
    public function getPagesStats(array $params): EnterprisePageOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Pages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Pages::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages();
        }

        $operator = new Operator\EnterpriseAdmin\GetPagesStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Pages::class]);

        return $operator->call();
    }

    /** @return */
    public function getPullRequestStats(array $params): EnterprisePullRequestOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Pulls::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Pulls::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls();
        }

        $operator = new Operator\EnterpriseAdmin\GetPullRequestStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Pulls::class]);

        return $operator->call();
    }

    /** @return */
    public function getRepoStats(array $params): EnterpriseRepositoryOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Repos::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Repos::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos();
        }

        $operator = new Operator\EnterpriseAdmin\GetRepoStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Repos::class]);

        return $operator->call();
    }

    /** @return */
    public function getUserStats(array $params): EnterpriseUserOverview|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Users::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Users::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Users();
        }

        $operator = new Operator\EnterpriseAdmin\GetUserStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Users::class]);

        return $operator->call();
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

    /** @return Observable<Schema\OrgPreReceiveHook> */
    public function listPreReceiveHooksForOrg(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PreReceiveHooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PreReceiveHooks::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks();
        }

        $operator = new Operator\EnterpriseAdmin\ListPreReceiveHooksForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PreReceiveHooks::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return (Schema\ConfigurationStatus | array{code: int}) */
    public function getConfigurationStatus(array $params): ConfigurationStatus|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Setup\Api\Configcheck::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Setup\Api\Configcheck::class] = $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Configcheck();
        }

        $operator = new Operator\EnterpriseAdmin\GetConfigurationStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Setup\Api\Configcheck::class]);

        return $operator->call();
    }

    /** @return (Schema\MaintenanceStatus | array{code: int}) */
    public function getMaintenanceStatus(array $params): MaintenanceStatus|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Setup\Api\Maintenance::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Setup\Api\Maintenance::class] = $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance();
        }

        $operator = new Operator\EnterpriseAdmin\GetMaintenanceStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Setup\Api\Maintenance::class]);

        return $operator->call();
    }

    /** @return (Schema\EnterpriseSettings | array{code: int}) */
    public function getSettings(array $params): EnterpriseSettings|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Setup\Api\Settings::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Setup\Api\Settings::class] = $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings();
        }

        $operator = new Operator\EnterpriseAdmin\GetSettings($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Setup\Api\Settings::class]);

        return $operator->call();
    }

    /** @return */
    public function getDownloadStatusForPreReceiveEnvironment(array $params): PreReceiveEnvironmentDownloadStatus|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads\Latest::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads\Latest::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest();
        }

        $operator = new Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads\Latest::class]);

        return $operator->call($arguments['pre_receive_environment_id']);
    }

    /** @return */
    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(array $params): Ok|array
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
    public function getPreReceiveHookForRepo(array $params): RepositoryPreReceiveHook|array
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
        if (array_key_exists('pre_receive_hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_hook_id');
        }

        $arguments['pre_receive_hook_id'] = $params['pre_receive_hook_id'];
        unset($params['pre_receive_hook_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId();
        }

        $operator = new Operator\EnterpriseAdmin\GetPreReceiveHookForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks\PreReceiveHookId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pre_receive_hook_id']);
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
    public function listSelfHostedRunnerGroupsForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups();
        }

        $operator = new Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups::class]);

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listSelfHostedRunnersForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|array
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
    public function getPreReceiveHookForOrg(array $params): OrgPreReceiveHook|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId();
        }

        $operator = new Operator\EnterpriseAdmin\GetPreReceiveHookForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PreReceiveHooks\PreReceiveHookId::class]);

        return $operator->call($arguments['org'], $arguments['pre_receive_hook_id']);
    }

    /** @return Observable<Schema\RepositoryPreReceiveHook> */
    public function listPreReceiveHooksForRepo(array $params): iterable
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks();
        }

        $operator = new Operator\EnterpriseAdmin\ListPreReceiveHooksForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return (Observable<Schema\SshKey> | array{code: int}) */
    public function getAllAuthorizedSshKeys(array $params): iterable
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class] = $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys();
        }

        $operator = new Operator\EnterpriseAdmin\GetAllAuthorizedSshKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys::class]);

        return $operator->call();
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
    public function listSelfHostedRunnersInGroupForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok|array
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
    public function listLabelsForSelfHostedRunnerForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|array
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
