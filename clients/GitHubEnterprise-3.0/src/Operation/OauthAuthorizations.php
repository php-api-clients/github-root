<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ApplicationGrant;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;

final class OauthAuthorizations
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\ApplicationGrant>|array{code:int} */
    public function listGrants(string $clientId, int $perPage, int $page): iterable
    {
        return $this->operators->oauthAuthorizations👷ListGrants()->call($clientId, $perPage, $page);
    }

    /** @return Observable<Schema\ApplicationGrant>|array{code:int} */
    public function listGrantsListing(string $clientId, int $perPage, int $page): iterable
    {
        return $this->operators->oauthAuthorizations👷ListGrantsListing()->call($clientId, $perPage, $page);
    }

    /** @return Schema\ApplicationGrant|array{code:int} */
    public function getGrant(int $grantId): ApplicationGrant|array
    {
        return $this->operators->oauthAuthorizations👷GetGrant()->call($grantId);
    }

    /** @return array{code:int} */
    public function deleteGrant(int $grantId): array
    {
        return $this->operators->oauthAuthorizations👷DeleteGrant()->call($grantId);
    }

    /** @return Observable<Schema\Authorization>|array{code:int} */
    public function listAuthorizations(string $clientId, int $perPage, int $page): iterable
    {
        return $this->operators->oauthAuthorizations👷ListAuthorizations()->call($clientId, $perPage, $page);
    }

    /** @return Observable<Schema\Authorization>|array{code:int} */
    public function listAuthorizationsListing(string $clientId, int $perPage, int $page): iterable
    {
        return $this->operators->oauthAuthorizations👷ListAuthorizationsListing()->call($clientId, $perPage, $page);
    }

    /** @return Schema\Authorization|array{code:int} */
    public function createAuthorization(array $params): Authorization|array
    {
        return $this->operators->oauthAuthorizations👷CreateAuthorization()->call($params);
    }

    /** @return Schema\Authorization|array{code:int} */
    public function getOrCreateAuthorizationForApp(string $clientId, array $params): Authorization|array
    {
        return $this->operators->oauthAuthorizations👷GetOrCreateAuthorizationForApp()->call($clientId, $params);
    }

    /** @return */
    public function getOrCreateAuthorizationForAppAndFingerprint(string $clientId, string $fingerprint, array $params): Authorization|array
    {
        return $this->operators->oauthAuthorizations👷GetOrCreateAuthorizationForAppAndFingerprint()->call($clientId, $fingerprint, $params);
    }

    /** @return Schema\Authorization|array{code:int} */
    public function getAuthorization(int $authorizationId): Authorization|array
    {
        return $this->operators->oauthAuthorizations👷GetAuthorization()->call($authorizationId);
    }

    /** @return array{code:int} */
    public function deleteAuthorization(int $authorizationId): array
    {
        return $this->operators->oauthAuthorizations👷DeleteAuthorization()->call($authorizationId);
    }

    /** @return */
    public function updateAuthorization(int $authorizationId, array $params): Authorization|array
    {
        return $this->operators->oauthAuthorizations👷UpdateAuthorization()->call($authorizationId, $params);
    }
}
