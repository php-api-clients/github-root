<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ApplicationGrant;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class OauthAuthorizations
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\ApplicationGrant>|WithoutBody */
    public function listGrants(string $clientId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->oauthAuthorizations👷ListGrants()->call($clientId, $perPage, $page);
    }

    /** @return Observable<Schema\ApplicationGrant>|WithoutBody */
    public function listGrantsListing(string $clientId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->oauthAuthorizations👷ListGrantsListing()->call($clientId, $perPage, $page);
    }

    /** @return */
    public function getGrant(int $grantId): ApplicationGrant|WithoutBody
    {
        return $this->operators->oauthAuthorizations👷GetGrant()->call($grantId);
    }

    /** @return */
    public function deleteGrant(int $grantId): WithoutBody
    {
        return $this->operators->oauthAuthorizations👷DeleteGrant()->call($grantId);
    }

    /** @return Observable<Schema\Authorization>|WithoutBody */
    public function listAuthorizations(string $clientId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->oauthAuthorizations👷ListAuthorizations()->call($clientId, $perPage, $page);
    }

    /** @return Observable<Schema\Authorization>|WithoutBody */
    public function listAuthorizationsListing(string $clientId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->oauthAuthorizations👷ListAuthorizationsListing()->call($clientId, $perPage, $page);
    }

    /** @return */
    public function createAuthorization(array $params): Authorization|WithoutBody
    {
        return $this->operators->oauthAuthorizations👷CreateAuthorization()->call($params);
    }

    /** @return */
    public function getOrCreateAuthorizationForApp(string $clientId, array $params): Authorization|WithoutBody
    {
        return $this->operators->oauthAuthorizations👷GetOrCreateAuthorizationForApp()->call($clientId, $params);
    }

    /** @return */
    public function getOrCreateAuthorizationForAppAndFingerprint(string $clientId, string $fingerprint, array $params): Authorization
    {
        return $this->operators->oauthAuthorizations👷GetOrCreateAuthorizationForAppAndFingerprint()->call($clientId, $fingerprint, $params);
    }

    /** @return */
    public function getAuthorization(int $authorizationId): Authorization|WithoutBody
    {
        return $this->operators->oauthAuthorizations👷GetAuthorization()->call($authorizationId);
    }

    /** @return */
    public function deleteAuthorization(int $authorizationId): WithoutBody
    {
        return $this->operators->oauthAuthorizations👷DeleteAuthorization()->call($authorizationId);
    }

    /** @return */
    public function updateAuthorization(int $authorizationId, array $params): Authorization
    {
        return $this->operators->oauthAuthorizations👷UpdateAuthorization()->call($authorizationId, $params);
    }
}
