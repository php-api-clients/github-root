<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal\Operators;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\GpgKey;
use ApiClients\Client\GitHub\Schema\Hovercard;
use ApiClients\Client\GitHub\Schema\Key;
use ApiClients\Client\GitHub\Schema\Operations\Users\ListAttestations\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\PrivateUser;
use ApiClients\Client\GitHub\Schema\PublicUser;
use ApiClients\Client\GitHub\Schema\SshSigningKey;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Users
{
    public function __construct(public Operators $operators)
    {
    }

    /** @return */
    public function getAuthenticated(): PrivateUser|PublicUser|WithoutBody
    {
        return $this->operators->users👷GetAuthenticated()->call();
    }

    /** @return */
    public function updateAuthenticated(array $params): PrivateUser|WithoutBody
    {
        return $this->operators->users👷UpdateAuthenticated()->call($params);
    }

    /** @return Observable<SimpleUser>|WithoutBody */
    public function listBlockedByAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListBlockedByAuthenticatedUser()->call($perPage, $page);
    }

    /** @return */
    public function checkBlocked(string $username): WithoutBody
    {
        return $this->operators->users👷CheckBlocked()->call($username);
    }

    /** @return */
    public function block(string $username): WithoutBody
    {
        return $this->operators->users👷Block()->call($username);
    }

    /** @return */
    public function unblock(string $username): WithoutBody
    {
        return $this->operators->users👷Unblock()->call($username);
    }

    /** @return Observable<Email>|WithoutBody */
    public function setPrimaryEmailVisibilityForAuthenticatedUser(array $params): iterable|WithoutBody
    {
        return $this->operators->users👷SetPrimaryEmailVisibilityForAuthenticatedUser()->call($params);
    }

    /** @return Observable<Email>|WithoutBody */
    public function listEmailsForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListEmailsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Email>|WithoutBody */
    public function addEmailForAuthenticatedUser(array $params): iterable|WithoutBody
    {
        return $this->operators->users👷AddEmailForAuthenticatedUser()->call($params);
    }

    /** @return */
    public function deleteEmailForAuthenticatedUser(array $params): WithoutBody
    {
        return $this->operators->users👷DeleteEmailForAuthenticatedUser()->call($params);
    }

    /** @return Observable<SimpleUser>|WithoutBody */
    public function listFollowersForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListFollowersForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<SimpleUser>|WithoutBody */
    public function listFollowedByAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListFollowedByAuthenticatedUser()->call($perPage, $page);
    }

    /** @return */
    public function checkPersonIsFollowedByAuthenticated(string $username): WithoutBody
    {
        return $this->operators->users👷CheckPersonIsFollowedByAuthenticated()->call($username);
    }

    /** @return */
    public function follow(string $username): WithoutBody
    {
        return $this->operators->users👷Follow()->call($username);
    }

    /** @return */
    public function unfollow(string $username): WithoutBody
    {
        return $this->operators->users👷Unfollow()->call($username);
    }

    /** @return Observable<GpgKey>|WithoutBody */
    public function listGpgKeysForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListGpgKeysForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return */
    public function createGpgKeyForAuthenticatedUser(array $params): GpgKey|WithoutBody
    {
        return $this->operators->users👷CreateGpgKeyForAuthenticatedUser()->call($params);
    }

    /** @return */
    public function getGpgKeyForAuthenticatedUser(int $gpgKeyId): GpgKey|WithoutBody
    {
        return $this->operators->users👷GetGpgKeyForAuthenticatedUser()->call($gpgKeyId);
    }

    /** @return */
    public function deleteGpgKeyForAuthenticatedUser(int $gpgKeyId): WithoutBody
    {
        return $this->operators->users👷DeleteGpgKeyForAuthenticatedUser()->call($gpgKeyId);
    }

    /** @return Observable<Key>|WithoutBody */
    public function listPublicSshKeysForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListPublicSshKeysForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return */
    public function createPublicSshKeyForAuthenticatedUser(array $params): Key|WithoutBody
    {
        return $this->operators->users👷CreatePublicSshKeyForAuthenticatedUser()->call($params);
    }

    /** @return */
    public function getPublicSshKeyForAuthenticatedUser(int $keyId): Key|WithoutBody
    {
        return $this->operators->users👷GetPublicSshKeyForAuthenticatedUser()->call($keyId);
    }

    /** @return */
    public function deletePublicSshKeyForAuthenticatedUser(int $keyId): WithoutBody
    {
        return $this->operators->users👷DeletePublicSshKeyForAuthenticatedUser()->call($keyId);
    }

    /** @return Observable<Email>|WithoutBody */
    public function listPublicEmailsForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListPublicEmailsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<SocialAccount>|WithoutBody */
    public function listSocialAccountsForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListSocialAccountsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<SocialAccount>|WithoutBody */
    public function addSocialAccountForAuthenticatedUser(array $params): iterable|WithoutBody
    {
        return $this->operators->users👷AddSocialAccountForAuthenticatedUser()->call($params);
    }

    /** @return */
    public function deleteSocialAccountForAuthenticatedUser(array $params): WithoutBody
    {
        return $this->operators->users👷DeleteSocialAccountForAuthenticatedUser()->call($params);
    }

    /** @return Observable<SshSigningKey>|WithoutBody */
    public function listSshSigningKeysForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListSshSigningKeysForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return */
    public function createSshSigningKeyForAuthenticatedUser(array $params): SshSigningKey|WithoutBody
    {
        return $this->operators->users👷CreateSshSigningKeyForAuthenticatedUser()->call($params);
    }

    /** @return */
    public function getSshSigningKeyForAuthenticatedUser(int $sshSigningKeyId): SshSigningKey|WithoutBody
    {
        return $this->operators->users👷GetSshSigningKeyForAuthenticatedUser()->call($sshSigningKeyId);
    }

    /** @return */
    public function deleteSshSigningKeyForAuthenticatedUser(int $sshSigningKeyId): WithoutBody
    {
        return $this->operators->users👷DeleteSshSigningKeyForAuthenticatedUser()->call($sshSigningKeyId);
    }

    /** @return */
    public function getById(int $accountId): PrivateUser|PublicUser
    {
        return $this->operators->users👷GetById()->call($accountId);
    }

    /** @return Observable<SimpleUser>|WithoutBody */
    public function list(int $since, int $perPage): iterable|WithoutBody
    {
        return $this->operators->users👷List_()->call($since, $perPage);
    }

    /** @return */
    public function getByUsername(string $username): PrivateUser|PublicUser
    {
        return $this->operators->users👷GetByUsername()->call($username);
    }

    /** @return */
    public function listAttestations(string $before, string $after, string $username, string $subjectDigest, int $perPage): Ok|EmptyObject|WithoutBody
    {
        return $this->operators->users👷ListAttestations()->call($before, $after, $username, $subjectDigest, $perPage);
    }

    /** @return Observable<SimpleUser> */
    public function listFollowersForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowersForUser()->call($username, $perPage, $page);
    }

    /** @return Observable<SimpleUser> */
    public function listFollowingForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowingForUser()->call($username, $perPage, $page);
    }

    /** @return */
    public function checkFollowingForUser(string $username, string $targetUser): WithoutBody
    {
        return $this->operators->users👷CheckFollowingForUser()->call($username, $targetUser);
    }

    /** @return Observable<GpgKey> */
    public function listGpgKeysForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListGpgKeysForUser()->call($username, $perPage, $page);
    }

    /** @return */
    public function getContextForUser(string $username, string $subjectType, string $subjectId): Hovercard
    {
        return $this->operators->users👷GetContextForUser()->call($username, $subjectType, $subjectId);
    }

    /** @return Observable<KeySimple> */
    public function listPublicKeysForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListPublicKeysForUser()->call($username, $perPage, $page);
    }

    /** @return Observable<SocialAccount> */
    public function listSocialAccountsForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListSocialAccountsForUser()->call($username, $perPage, $page);
    }

    /** @return Observable<SshSigningKey> */
    public function listSshSigningKeysForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListSshSigningKeysForUser()->call($username, $perPage, $page);
    }
}
