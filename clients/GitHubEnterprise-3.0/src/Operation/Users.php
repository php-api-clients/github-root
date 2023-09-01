<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\GpgKey;
use ApiClients\Client\GitHubEnterprise\Schema\Hovercard;
use ApiClients\Client\GitHubEnterprise\Schema\Key;
use ApiClients\Client\GitHubEnterprise\Schema\PrivateUser;
use ApiClients\Client\GitHubEnterprise\Schema\PublicUser;

final class Users
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\PrivateUser|Schema\PublicUser|array{code:int} */
    public function getAuthenticated(): PrivateUser|PublicUser|array
    {
        return $this->operators->users👷GetAuthenticated()->call();
    }

    /** @return Schema\PrivateUser|array{code:int} */
    public function updateAuthenticated(array $params): PrivateUser|array
    {
        return $this->operators->users👷UpdateAuthenticated()->call($params);
    }

    /** @return Observable<Schema\Email>|array{code:int} */
    public function listEmailsForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListEmailsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\Email>|array{code:int} */
    public function listEmailsForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListEmailsForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return Observable<Schema\Email>|array{code:int} */
    public function addEmailForAuthenticatedUser(array $params): iterable
    {
        return $this->operators->users👷AddEmailForAuthenticatedUser()->call($params);
    }

    /** @return array{code:int} */
    public function deleteEmailForAuthenticatedUser(array $params): array
    {
        return $this->operators->users👷DeleteEmailForAuthenticatedUser()->call($params);
    }

    /** @return Observable<Schema\SimpleUser>|array{code:int} */
    public function listFollowersForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowersForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser>|array{code:int} */
    public function listFollowersForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowersForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser>|array{code:int} */
    public function listFollowedByAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowedByAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser>|array{code:int} */
    public function listFollowedByAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowedByAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return array{code:int} */
    public function checkPersonIsFollowedByAuthenticated(string $username): array
    {
        return $this->operators->users👷CheckPersonIsFollowedByAuthenticated()->call($username);
    }

    /** @return array{code:int} */
    public function follow(string $username): array
    {
        return $this->operators->users👷Follow()->call($username);
    }

    /** @return array{code:int} */
    public function unfollow(string $username): array
    {
        return $this->operators->users👷Unfollow()->call($username);
    }

    /** @return Observable<Schema\GpgKey>|array{code:int} */
    public function listGpgKeysForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListGpgKeysForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\GpgKey>|array{code:int} */
    public function listGpgKeysForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListGpgKeysForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return Schema\GpgKey|array{code:int} */
    public function createGpgKeyForAuthenticatedUser(array $params): GpgKey|array
    {
        return $this->operators->users👷CreateGpgKeyForAuthenticatedUser()->call($params);
    }

    /** @return Schema\GpgKey|array{code:int} */
    public function getGpgKeyForAuthenticatedUser(int $gpgKeyId): GpgKey|array
    {
        return $this->operators->users👷GetGpgKeyForAuthenticatedUser()->call($gpgKeyId);
    }

    /** @return array{code:int} */
    public function deleteGpgKeyForAuthenticatedUser(int $gpgKeyId): array
    {
        return $this->operators->users👷DeleteGpgKeyForAuthenticatedUser()->call($gpgKeyId);
    }

    /** @return Observable<Schema\Key>|array{code:int} */
    public function listPublicSshKeysForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListPublicSshKeysForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\Key>|array{code:int} */
    public function listPublicSshKeysForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListPublicSshKeysForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return Schema\Key|array{code:int} */
    public function createPublicSshKeyForAuthenticatedUser(array $params): Key|array
    {
        return $this->operators->users👷CreatePublicSshKeyForAuthenticatedUser()->call($params);
    }

    /** @return Schema\Key|array{code:int} */
    public function getPublicSshKeyForAuthenticatedUser(int $keyId): Key|array
    {
        return $this->operators->users👷GetPublicSshKeyForAuthenticatedUser()->call($keyId);
    }

    /** @return array{code:int} */
    public function deletePublicSshKeyForAuthenticatedUser(int $keyId): array
    {
        return $this->operators->users👷DeletePublicSshKeyForAuthenticatedUser()->call($keyId);
    }

    /** @return Observable<Schema\Email>|array{code:int} */
    public function listPublicEmailsForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListPublicEmailsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\Email>|array{code:int} */
    public function listPublicEmailsForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListPublicEmailsForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser>|array{code:int} */
    public function list(int $since, int $perPage): iterable
    {
        return $this->operators->users👷List_()->call($since, $perPage);
    }

    /** @return */
    public function getByUsername(string $username): PrivateUser|PublicUser|array
    {
        return $this->operators->users👷GetByUsername()->call($username);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listFollowersForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowersForUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listFollowersForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowersForUserListing()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listFollowingForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowingForUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listFollowingForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowingForUserListing()->call($username, $perPage, $page);
    }

    /** @return array{code:int} */
    public function checkFollowingForUser(string $username, string $targetUser): array
    {
        return $this->operators->users👷CheckFollowingForUser()->call($username, $targetUser);
    }

    /** @return Observable<Schema\GpgKey> */
    public function listGpgKeysForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListGpgKeysForUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\GpgKey> */
    public function listGpgKeysForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListGpgKeysForUserListing()->call($username, $perPage, $page);
    }

    /** @return */
    public function getContextForUser(string $username, string $subjectType, string $subjectId): Hovercard|array
    {
        return $this->operators->users👷GetContextForUser()->call($username, $subjectType, $subjectId);
    }

    /** @return Observable<Schema\KeySimple> */
    public function listPublicKeysForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListPublicKeysForUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\KeySimple> */
    public function listPublicKeysForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListPublicKeysForUserListing()->call($username, $perPage, $page);
    }
}
