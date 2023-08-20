<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ApplicationGrant;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class OauthAuthorizations
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\ApplicationGrant> | array{code: int}) */
    public function listGrants(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
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
        if (array_key_exists(Hydrator\Operation\Applications\Grants::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\Grants::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀Grants();
        }

        $operator = new Operator\OauthAuthorizations\ListGrants($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\Grants::class]);

        return $operator->call($arguments['client_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\Authorization | array{code: int}) */
    public function getAuthorization(array $params): Authorization|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('authorization_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: authorization_id');
        }

        $arguments['authorization_id'] = $params['authorization_id'];
        unset($params['authorization_id']);
        if (array_key_exists(Hydrator\Operation\Authorizations\AuthorizationId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Authorizations\AuthorizationId::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations🌀AuthorizationId();
        }

        $operator = new Operator\OauthAuthorizations\GetAuthorization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations\AuthorizationId::class]);

        return $operator->call($arguments['authorization_id']);
    }

    /** @return (Schema\ApplicationGrant | array{code: int}) */
    public function getGrant(array $params): ApplicationGrant|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('grant_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: grant_id');
        }

        $arguments['grant_id'] = $params['grant_id'];
        unset($params['grant_id']);
        if (array_key_exists(Hydrator\Operation\Applications\Grants\GrantId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\Grants\GrantId::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀Grants🌀GrantId();
        }

        $operator = new Operator\OauthAuthorizations\GetGrant($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\Grants\GrantId::class]);

        return $operator->call($arguments['grant_id']);
    }

    /** @return (iterable<Schema\Authorization> | array{code: int}) */
    public function listAuthorizations(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
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
        if (array_key_exists(Hydrator\Operation\Authorizations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Authorizations::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations();
        }

        $operator = new Operator\OauthAuthorizations\ListAuthorizations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations::class]);

        return $operator->call($arguments['client_id'], $arguments['per_page'], $arguments['page']);
    }
}
