<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class OauthAuthorizations
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listGrants(string $clientId, int $perPage, int $page): Schema\ApplicationGrant
    {
        if (array_key_exists(Operator\OauthAuthorizations\ListGrants::class, $this->operator) === false) {
            $this->operator[Operator\OauthAuthorizations\ListGrants::class] = new Operator\OauthAuthorizations\ListGrants($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀Grants());
        }

        return $this->operator[Operator\OauthAuthorizations\ListGrants::class]->call($clientId, $perPage, $page);
    }

    public function getGrant(int $grantId): Schema\ApplicationGrant
    {
        if (array_key_exists(Operator\OauthAuthorizations\GetGrant::class, $this->operator) === false) {
            $this->operator[Operator\OauthAuthorizations\GetGrant::class] = new Operator\OauthAuthorizations\GetGrant($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀Grants🌀GrantId());
        }

        return $this->operator[Operator\OauthAuthorizations\GetGrant::class]->call($grantId);
    }

    public function deleteGrant(int $grantId): ResponseInterface
    {
        if (array_key_exists(Operator\OauthAuthorizations\DeleteGrant::class, $this->operator) === false) {
            $this->operator[Operator\OauthAuthorizations\DeleteGrant::class] = new Operator\OauthAuthorizations\DeleteGrant($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀Grants🌀GrantId());
        }

        return $this->operator[Operator\OauthAuthorizations\DeleteGrant::class]->call($grantId);
    }

    public function listAuthorizations(string $clientId, int $perPage, int $page): Schema\Authorization
    {
        if (array_key_exists(Operator\OauthAuthorizations\ListAuthorizations::class, $this->operator) === false) {
            $this->operator[Operator\OauthAuthorizations\ListAuthorizations::class] = new Operator\OauthAuthorizations\ListAuthorizations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Authorizations());
        }

        return $this->operator[Operator\OauthAuthorizations\ListAuthorizations::class]->call($clientId, $perPage, $page);
    }

    public function createAuthorization(array $params): Schema\Authorization
    {
        if (array_key_exists(Operator\OauthAuthorizations\CreateAuthorization::class, $this->operator) === false) {
            $this->operator[Operator\OauthAuthorizations\CreateAuthorization::class] = new Operator\OauthAuthorizations\CreateAuthorization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Authorizations());
        }

        return $this->operator[Operator\OauthAuthorizations\CreateAuthorization::class]->call($params);
    }

    public function getOrCreateAuthorizationForApp(string $clientId, array $params): Schema\Authorization
    {
        if (array_key_exists(Operator\OauthAuthorizations\GetOrCreateAuthorizationForApp::class, $this->operator) === false) {
            $this->operator[Operator\OauthAuthorizations\GetOrCreateAuthorizationForApp::class] = new Operator\OauthAuthorizations\GetOrCreateAuthorizationForApp($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Authorizations🌀Clients🌀ClientId());
        }

        return $this->operator[Operator\OauthAuthorizations\GetOrCreateAuthorizationForApp::class]->call($clientId, $params);
    }

    public function getOrCreateAuthorizationForAppAndFingerprint(string $clientId, string $fingerprint, array $params): Schema\Authorization
    {
        if (array_key_exists(Operator\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint::class, $this->operator) === false) {
            $this->operator[Operator\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint::class] = new Operator\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Authorizations🌀Clients🌀ClientId🌀Fingerprint());
        }

        return $this->operator[Operator\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint::class]->call($clientId, $fingerprint, $params);
    }

    public function getAuthorization(int $authorizationId): Schema\Authorization
    {
        if (array_key_exists(Operator\OauthAuthorizations\GetAuthorization::class, $this->operator) === false) {
            $this->operator[Operator\OauthAuthorizations\GetAuthorization::class] = new Operator\OauthAuthorizations\GetAuthorization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Authorizations🌀AuthorizationId());
        }

        return $this->operator[Operator\OauthAuthorizations\GetAuthorization::class]->call($authorizationId);
    }

    public function deleteAuthorization(int $authorizationId): ResponseInterface
    {
        if (array_key_exists(Operator\OauthAuthorizations\DeleteAuthorization::class, $this->operator) === false) {
            $this->operator[Operator\OauthAuthorizations\DeleteAuthorization::class] = new Operator\OauthAuthorizations\DeleteAuthorization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Authorizations🌀AuthorizationId());
        }

        return $this->operator[Operator\OauthAuthorizations\DeleteAuthorization::class]->call($authorizationId);
    }

    public function updateAuthorization(int $authorizationId, array $params): Schema\Authorization
    {
        if (array_key_exists(Operator\OauthAuthorizations\UpdateAuthorization::class, $this->operator) === false) {
            $this->operator[Operator\OauthAuthorizations\UpdateAuthorization::class] = new Operator\OauthAuthorizations\UpdateAuthorization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Authorizations🌀AuthorizationId());
        }

        return $this->operator[Operator\OauthAuthorizations\UpdateAuthorization::class]->call($authorizationId, $params);
    }
}
