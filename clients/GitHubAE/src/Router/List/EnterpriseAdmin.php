<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\List;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema;
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

    /** @return iterable<Schema\GlobalHook> */
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

    /** @return iterable<Schema\PublicKeyFull> */
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

    /** @return iterable<Schema\PreReceiveEnvironment> */
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

    /** @return iterable<Schema\Authorization> */
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

    /** @return iterable<Schema\AuditLogEvent> */
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
            $items    = $operator->call($arguments['enterprise'], $arguments['phrase'], $arguments['after'], $arguments['before'], $arguments['order'], $arguments['page'], $arguments['per_page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
