<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Get;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubAE\Schema\Announcement;
use ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseOverview;
use ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview;
use ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview;
use ApiClients\Client\GitHubAE\Schema\GlobalHook;
use ApiClients\Client\GitHubAE\Schema\LicenseInfo;
use ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\Applicationjson\H200;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubAE\Schema\Runner;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubAE\Schema\SelectedActions;
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

    public function listGlobalWebhooks(array $params)
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
        if (array_key_exists(Hydrator\Operation\Admin\Hooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks();
        }

        $operation = new Operation\EnterpriseAdmin\ListGlobalWebhooks($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Hooks::class], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function listPublicKeys(array $params)
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
        if (array_key_exists(Hydrator\Operation\Admin\Keys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Keys::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Keys();
        }

        $operation = new Operation\EnterpriseAdmin\ListPublicKeys($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Keys::class], $arguments['since'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function listPreReceiveEnvironments(array $params)
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
        if (array_key_exists(Hydrator\Operation\Admin\PreReceiveEnvironments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments();
        }

        $operation = new Operation\EnterpriseAdmin\ListPreReceiveEnvironments($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function listPersonalAccessTokens(array $params)
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
        if (array_key_exists(Hydrator\Operation\Admin\Tokens::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Tokens::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Tokens();
        }

        $operation = new Operation\EnterpriseAdmin\ListPersonalAccessTokens($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Tokens::class], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function getAnnouncement(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Announcement::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Announcement::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement();
        }

        $operation = new Operation\EnterpriseAdmin\GetAnnouncement($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Announcement::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Announcement {
            return $operation->createResponse($response);
        });
    }

    public function getGlobalWebhook(array $params)
    {
        $arguments = [];
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists(Hydrator\Operation\Admin\Hooks\CbHookIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\Hooks\CbHookIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀CbHookIdRcb();
        }

        $operation = new Operation\EnterpriseAdmin\GetGlobalWebhook($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Hooks\CbHookIdRcb::class], $arguments['hook_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GlobalHook {
            return $operation->createResponse($response);
        });
    }

    public function getPreReceiveEnvironment(array $params)
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb();
        }

        $operation = new Operation\EnterpriseAdmin\GetPreReceiveEnvironment($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb::class], $arguments['pre_receive_environment_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PreReceiveEnvironment {
            return $operation->createResponse($response);
        });
    }

    public function getLicenseInformation(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Settings\License::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Settings\License::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Settings🌀License();
        }

        $operation = new Operation\EnterpriseAdmin\GetLicenseInformation($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Settings\License::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): LicenseInfo {
            return $operation->createResponse($response);
        });
    }

    public function getAllStats(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\All::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\All::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀All();
        }

        $operation = new Operation\EnterpriseAdmin\GetAllStats($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\All::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseOverview {
            return $operation->createResponse($response);
        });
    }

    public function getCommentStats(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments();
        }

        $operation = new Operation\EnterpriseAdmin\GetCommentStats($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Comments::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseCommentOverview {
            return $operation->createResponse($response);
        });
    }

    public function getGistStats(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Gists::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Gists::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists();
        }

        $operation = new Operation\EnterpriseAdmin\GetGistStats($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Gists::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseGistOverview {
            return $operation->createResponse($response);
        });
    }

    public function getHooksStats(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Hooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks();
        }

        $operation = new Operation\EnterpriseAdmin\GetHooksStats($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Hooks::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseHookOverview {
            return $operation->createResponse($response);
        });
    }

    public function getIssueStats(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Issues::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Issues::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues();
        }

        $operation = new Operation\EnterpriseAdmin\GetIssueStats($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Issues::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseIssueOverview {
            return $operation->createResponse($response);
        });
    }

    public function getMilestoneStats(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Milestones::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Milestones::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones();
        }

        $operation = new Operation\EnterpriseAdmin\GetMilestoneStats($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Milestones::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseMilestoneOverview {
            return $operation->createResponse($response);
        });
    }

    public function getOrgStats(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Orgs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Orgs::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs();
        }

        $operation = new Operation\EnterpriseAdmin\GetOrgStats($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Orgs::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseOrganizationOverview {
            return $operation->createResponse($response);
        });
    }

    public function getPagesStats(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Pages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Pages::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages();
        }

        $operation = new Operation\EnterpriseAdmin\GetPagesStats($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Pages::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterprisePageOverview {
            return $operation->createResponse($response);
        });
    }

    public function getPullRequestStats(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Pulls::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Pulls::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls();
        }

        $operation = new Operation\EnterpriseAdmin\GetPullRequestStats($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Pulls::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterprisePullRequestOverview {
            return $operation->createResponse($response);
        });
    }

    public function getRepoStats(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Repos::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Repos::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos();
        }

        $operation = new Operation\EnterpriseAdmin\GetRepoStats($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Repos::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseRepositoryOverview {
            return $operation->createResponse($response);
        });
    }

    public function getUserStats(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Enterprise\Stats\Users::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprise\Stats\Users::class] = $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Users();
        }

        $operation = new Operation\EnterpriseAdmin\GetUserStats($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprise\Stats\Users::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EnterpriseUserOverview {
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

        $operation = new Operation\EnterpriseAdmin\GetAuditLog($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog::class], $arguments['enterprise'], $arguments['phrase'], $arguments['after'], $arguments['before'], $arguments['order'], $arguments['page'], $arguments['per_page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function getDownloadStatusForPreReceiveEnvironment(array $params)
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads🌀Latest();
        }

        $operation = new Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest::class], $arguments['pre_receive_environment_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PreReceiveEnvironmentDownloadStatus {
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

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): H200 {
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

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200 {
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

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\Applicationjson\H200 {
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

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }

    public function getDownloadStatusForPreReceiveEnvironmentStreaming(array $params)
    {
        $arguments = [];
        if (array_key_exists('pre_receive_environment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pre_receive_environment_id');
        }

        $arguments['pre_receive_environment_id'] = $params['pre_receive_environment_id'];
        unset($params['pre_receive_environment_id']);
        if (array_key_exists(Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest::class] = $this->hydrators->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads🌀Latest();
        }

        $operation = new Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest::class], $this->browser, $arguments['pre_receive_environment_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PreReceiveEnvironmentDownloadStatus {
            return $operation->createResponse($response);
        });
    }
}
