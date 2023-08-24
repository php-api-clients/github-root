<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\List;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class EnterpriseAdmin
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\GlobalHook> */
    public function listGlobalWebhooksListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\EnterpriseAdmin\ListGlobalWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Hooks::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\PublicKeyFull> */
    public function listPublicKeysListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\EnterpriseAdmin\ListPublicKeysListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Keys::class]);
            $items    = $operator->call($arguments['since'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\PreReceiveEnvironment> */
    public function listPreReceiveEnvironmentsListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\EnterpriseAdmin\ListPreReceiveEnvironmentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveEnvironments::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\PreReceiveHook> */
    public function listPreReceiveHooksListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\EnterpriseAdmin\ListPreReceiveHooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\PreReceiveHooks::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\Authorization> */
    public function listPersonalAccessTokensListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\EnterpriseAdmin\ListPersonalAccessTokensListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Admin\Tokens::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function getAuditLogListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\EnterpriseAdmin\GetAuditLogListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\AuditLog::class]);
            $items    = $operator->call($arguments['enterprise'], $arguments['phrase'], $arguments['include'], $arguments['after'], $arguments['before'], $arguments['order'], $arguments['page'], $arguments['per_page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\OrgPreReceiveHook> */
    public function listPreReceiveHooksForOrgListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\EnterpriseAdmin\ListPreReceiveHooksForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PreReceiveHooks::class]);
            $items    = $operator->call($arguments['org'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\RepositoryPreReceiveHook> */
    public function listPreReceiveHooksForRepoListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\EnterpriseAdmin\ListPreReceiveHooksForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\PreReceiveHooks::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page'], $arguments['direction'], $arguments['sort']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
