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
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityProductsOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview;
use ApiClients\Client\GitHubEnterprise\Schema\GhesChecksSystemRequirements;
use ApiClients\Client\GitHubEnterprise\Schema\GhesConfigNodes;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings;
use ApiClients\Client\GitHubEnterprise\Schema\GhesLicenseCheck;
use ApiClients\Client\GitHubEnterprise\Schema\GhesLicenseInfo;
use ApiClients\Client\GitHubEnterprise\Schema\GhesReplicationStatus;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;
use ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;
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
use ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList;
use ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList;
use ApiClients\Client\GitHubEnterprise\Schema\SelectedActions;
use ApiClients\Client\GitHubEnterprise\Schema\UserResponse;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class EnterpriseAdmin
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\GlobalHook> */
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListGlobalWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\PublicKeyFull> */
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

    /** @return Observable<Schema\PreReceiveEnvironment> */
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

    /** @return Observable<Schema\PreReceiveHook> */
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

    /** @return Observable<Schema\Authorization> */
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

    /** @return */
    public function getAnnouncement(array $params): Announcement
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetAnnouncement($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement());

        return $operator->call();
    }

    /** @return */
    public function getGlobalWebhook(array $params): GlobalHook
    {
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetGlobalWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId());

        return $operator->call($arguments['hook_id']);
    }

    /** @return */
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

    /** @return */
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

    /** @return */
    public function getLicenseInformation(array $params): LicenseInfo
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetLicenseInformation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Settings🌀License());

        return $operator->call();
    }

    /** @return */
    public function getAllStats(array $params): EnterpriseOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetAllStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀All());

        return $operator->call();
    }

    /** @return */
    public function getCommentStats(array $params): EnterpriseCommentOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetCommentStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments());

        return $operator->call();
    }

    /** @return */
    public function getGistStats(array $params): EnterpriseGistOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetGistStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists());

        return $operator->call();
    }

    /** @return */
    public function getHooksStats(array $params): EnterpriseHookOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetHooksStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks());

        return $operator->call();
    }

    /** @return */
    public function getIssueStats(array $params): EnterpriseIssueOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetIssueStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues());

        return $operator->call();
    }

    /** @return */
    public function getMilestoneStats(array $params): EnterpriseMilestoneOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetMilestoneStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones());

        return $operator->call();
    }

    /** @return */
    public function getOrgStats(array $params): EnterpriseOrganizationOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetOrgStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs());

        return $operator->call();
    }

    /** @return */
    public function getPagesStats(array $params): EnterprisePageOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetPagesStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages());

        return $operator->call();
    }

    /** @return */
    public function getPullRequestStats(array $params): EnterprisePullRequestOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetPullRequestStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls());

        return $operator->call();
    }

    /** @return */
    public function getRepoStats(array $params): EnterpriseRepositoryOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetRepoStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos());

        return $operator->call();
    }

    /** @return */
    public function getSecurityProducts(array $params): EnterpriseSecurityProductsOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetSecurityProducts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀SecurityProducts());

        return $operator->call();
    }

    /** @return */
    public function getUserStats(array $params): EnterpriseUserOverview
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetUserStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Users());

        return $operator->call();
    }

    /** @return Observable<Schema\AuditLogEvent> */
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
        $operator = new Internal\Operator\EnterpriseAdmin\GetAuditLog($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀AuditLog());

        return $operator->call($arguments['enterprise'], $arguments['phrase'], $arguments['include'], $arguments['after'], $arguments['before'], $arguments['order'], $arguments['page'], $arguments['per_page']);
    }

    /** @return Observable<Schema\GhesGetMaintenance>|WithoutBody */
    public function getManageMaintenance(array $params): iterable|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('uuid', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: uuid');
        }

        $arguments['uuid'] = $params['uuid'];
        unset($params['uuid']);
        if (array_key_exists('cluster_roles', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cluster_roles');
        }

        $arguments['cluster_roles'] = $params['cluster_roles'];
        unset($params['cluster_roles']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetManageMaintenance($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Manage🌀V1🌀Maintenance());

        return $operator->call($arguments['uuid'], $arguments['cluster_roles']);
    }

    /** @return Observable<Schema\GhesVersion>|WithoutBody */
    public function getVersion(array $params): iterable|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('uuid', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: uuid');
        }

        $arguments['uuid'] = $params['uuid'];
        unset($params['uuid']);
        if (array_key_exists('cluster_roles', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cluster_roles');
        }

        $arguments['cluster_roles'] = $params['cluster_roles'];
        unset($params['cluster_roles']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetVersion($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Manage🌀V1🌀Version());

        return $operator->call($arguments['uuid'], $arguments['cluster_roles']);
    }

    /** @return Observable<Schema\OrgPreReceiveHook> */
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

    /** @return */
    public function listProvisionedGroupsEnterprise(array $params): ScimEnterpriseGroupList|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('filter', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: filter');
        }

        $arguments['filter'] = $params['filter'];
        unset($params['filter']);
        if (array_key_exists('excludedAttributes', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: excludedAttributes');
        }

        $arguments['excludedAttributes'] = $params['excludedAttributes'];
        unset($params['excludedAttributes']);
        if (array_key_exists('startIndex', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: startIndex');
        }

        $arguments['startIndex'] = $params['startIndex'];
        unset($params['startIndex']);
        if (array_key_exists('count', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: count');
        }

        $arguments['count'] = $params['count'];
        unset($params['count']);
        $operator = new Internal\Operator\EnterpriseAdmin\ListProvisionedGroupsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Groups());

        return $operator->call($arguments['filter'], $arguments['excludedAttributes'], $arguments['startIndex'], $arguments['count']);
    }

    /** @return */
    public function listProvisionedIdentitiesEnterprise(array $params): ScimEnterpriseUserList|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('filter', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: filter');
        }

        $arguments['filter'] = $params['filter'];
        unset($params['filter']);
        if (array_key_exists('startIndex', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: startIndex');
        }

        $arguments['startIndex'] = $params['startIndex'];
        unset($params['startIndex']);
        if (array_key_exists('count', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: count');
        }

        $arguments['count'] = $params['count'];
        unset($params['count']);
        $operator = new Internal\Operator\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Users());

        return $operator->call($arguments['filter'], $arguments['startIndex'], $arguments['count']);
    }

    /** @return */
    public function getConfigurationStatus(array $params): ConfigurationStatus|WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetConfigurationStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Configcheck());

        return $operator->call();
    }

    /** @return */
    public function getMaintenanceStatus(array $params): MaintenanceStatus|WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetMaintenanceStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance());

        return $operator->call();
    }

    /** @return */
    public function getSettings(array $params): EnterpriseSettings|WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetSettings($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings());

        return $operator->call();
    }

    /** @return */
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

    /** @return */
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

    /** @return */
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

    /** @return */
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

    /** @return Observable<Schema\RunnerApplication> */
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

    /** @return */
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

    /** @return */
    public function licenseCheck(array $params): GhesLicenseCheck|WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\LicenseCheck($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Manage🌀V1🌀Config🌀License🌀Check());

        return $operator->call();
    }

    /** @return */
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

    /** @return */
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

    /** @return */
    public function listSelfHostedRunnerGroupsForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());

        return $operator->call($arguments['enterprise'], $arguments['visible_to_organization'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listSelfHostedRunnersForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok
    {
        $arguments = [];
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
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

        return $operator->call($arguments['name'], $arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\GhesGetSsh>|WithoutBody */
    public function getManageSsh(array $params): iterable|WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetManageSsh($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Manage🌀V1🌀Access🌀Ssh());

        return $operator->call();
    }

    /** @return */
    public function getChecksSystemRequirements(array $params): GhesChecksSystemRequirements|WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetChecksSystemRequirements($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Manage🌀V1🌀Checks🌀SystemRequirements());

        return $operator->call();
    }

    /** @return */
    public function licenseInfo(array $params): GhesLicenseInfo|WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\LicenseInfo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Manage🌀V1🌀Config🌀License());

        return $operator->call();
    }

    /** @return */
    public function getConfigNodes(array $params): GhesConfigNodes|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('uuid', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: uuid');
        }

        $arguments['uuid'] = $params['uuid'];
        unset($params['uuid']);
        if (array_key_exists('cluster_roles', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cluster_roles');
        }

        $arguments['cluster_roles'] = $params['cluster_roles'];
        unset($params['cluster_roles']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetConfigNodes($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Manage🌀V1🌀Config🌀Nodes());

        return $operator->call($arguments['uuid'], $arguments['cluster_roles']);
    }

    /** @return */
    public function getManageSettings(array $params): GhesGetSettings|WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetManageSettings($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Manage🌀V1🌀Config🌀Settings());

        return $operator->call();
    }

    /** @return */
    public function getReplicationStatus(array $params): GhesReplicationStatus|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('uuid', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: uuid');
        }

        $arguments['uuid'] = $params['uuid'];
        unset($params['uuid']);
        if (array_key_exists('cluster_roles', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cluster_roles');
        }

        $arguments['cluster_roles'] = $params['cluster_roles'];
        unset($params['cluster_roles']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetReplicationStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Manage🌀V1🌀Replication🌀Status());

        return $operator->call($arguments['uuid'], $arguments['cluster_roles']);
    }

    /** @return */
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

    /** @return Observable<Schema\RepositoryPreReceiveHook> */
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

    /** @return */
    public function getProvisioningInformationForEnterpriseGroup(array $params): GroupResponse|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('scim_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: scim_group_id');
        }

        $arguments['scim_group_id'] = $params['scim_group_id'];
        unset($params['scim_group_id']);
        if (array_key_exists('excludedAttributes', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: excludedAttributes');
        }

        $arguments['excludedAttributes'] = $params['excludedAttributes'];
        unset($params['excludedAttributes']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetProvisioningInformationForEnterpriseGroup($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Groups🌀ScimGroupId());

        return $operator->call($arguments['scim_group_id'], $arguments['excludedAttributes']);
    }

    /** @return */
    public function getProvisioningInformationForEnterpriseUser(array $params): UserResponse|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('scim_user_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: scim_user_id');
        }

        $arguments['scim_user_id'] = $params['scim_user_id'];
        unset($params['scim_user_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\GetProvisioningInformationForEnterpriseUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Users🌀ScimUserId());

        return $operator->call($arguments['scim_user_id']);
    }

    /** @return Observable<Schema\SshKey>|WithoutBody */
    public function getAllAuthorizedSshKeys(array $params): iterable|WithoutBody
    {
        $operator = new Internal\Operator\EnterpriseAdmin\GetAllAuthorizedSshKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys());

        return $operator->call();
    }

    /** @return */
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

    /** @return */
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

    /** @return */
    public function listLabelsForSelfHostedRunnerForEnterprise(array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok
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
        $operator = new Internal\Operator\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels());

        return $operator->call($arguments['enterprise'], $arguments['runner_id']);
    }
}
