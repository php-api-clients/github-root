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
use ApiClients\Client\GitHubEnterprise\Schema\SshSigningKey;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Users
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function getAuthenticated(): PrivateUser|PublicUser|WithoutBody
    {
        return $this->operators->users👷GetAuthenticated()->call();
    }

    public function updateAuthenticated(array $params): PrivateUser|WithoutBody
    {
        return $this->operators->users👷UpdateAuthenticated()->call($params);
    }

    /** @return iterable<int,Schema\Email>|WithoutBody */
    public function listEmailsForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListEmailsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\Email>|WithoutBody */
    public function listEmailsForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListEmailsForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\Email>|WithoutBody */
    public function addEmailForAuthenticatedUser(array $params): iterable|WithoutBody
    {
        return $this->operators->users👷AddEmailForAuthenticatedUser()->call($params);
    }

    public function deleteEmailForAuthenticatedUser(array $params): WithoutBody
    {
        return $this->operators->users👷DeleteEmailForAuthenticatedUser()->call($params);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function listFollowersForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListFollowersForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function listFollowersForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListFollowersForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function listFollowedByAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListFollowedByAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function listFollowedByAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListFollowedByAuthenticatedUserListing()->call($perPage, $page);
    }

    public function checkPersonIsFollowedByAuthenticated(string $username): WithoutBody
    {
        return $this->operators->users👷CheckPersonIsFollowedByAuthenticated()->call($username);
    }

    public function follow(string $username): WithoutBody
    {
        return $this->operators->users👷Follow()->call($username);
    }

    public function unfollow(string $username): WithoutBody
    {
        return $this->operators->users👷Unfollow()->call($username);
    }

    /** @return iterable<int,Schema\GpgKey>|WithoutBody */
    public function listGpgKeysForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListGpgKeysForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\GpgKey>|WithoutBody */
    public function listGpgKeysForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListGpgKeysForAuthenticatedUserListing()->call($perPage, $page);
    }

    public function createGpgKeyForAuthenticatedUser(array $params): GpgKey|WithoutBody
    {
        return $this->operators->users👷CreateGpgKeyForAuthenticatedUser()->call($params);
    }

    public function getGpgKeyForAuthenticatedUser(int $gpgKeyId): GpgKey|WithoutBody
    {
        return $this->operators->users👷GetGpgKeyForAuthenticatedUser()->call($gpgKeyId);
    }

    public function deleteGpgKeyForAuthenticatedUser(int $gpgKeyId): WithoutBody
    {
        return $this->operators->users👷DeleteGpgKeyForAuthenticatedUser()->call($gpgKeyId);
    }

    /** @return iterable<int,Schema\Key>|WithoutBody */
    public function listPublicSshKeysForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListPublicSshKeysForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\Key>|WithoutBody */
    public function listPublicSshKeysForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListPublicSshKeysForAuthenticatedUserListing()->call($perPage, $page);
    }

    public function createPublicSshKeyForAuthenticatedUser(array $params): Key|WithoutBody
    {
        return $this->operators->users👷CreatePublicSshKeyForAuthenticatedUser()->call($params);
    }

    public function getPublicSshKeyForAuthenticatedUser(int $keyId): Key|WithoutBody
    {
        return $this->operators->users👷GetPublicSshKeyForAuthenticatedUser()->call($keyId);
    }

    public function deletePublicSshKeyForAuthenticatedUser(int $keyId): WithoutBody
    {
        return $this->operators->users👷DeletePublicSshKeyForAuthenticatedUser()->call($keyId);
    }

    /** @return iterable<int,Schema\Email>|WithoutBody */
    public function listPublicEmailsForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListPublicEmailsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\Email>|WithoutBody */
    public function listPublicEmailsForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListPublicEmailsForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\SshSigningKey>|WithoutBody */
    public function listSshSigningKeysForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListSshSigningKeysForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\SshSigningKey>|WithoutBody */
    public function listSshSigningKeysForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->users👷ListSshSigningKeysForAuthenticatedUserListing()->call($perPage, $page);
    }

    public function createSshSigningKeyForAuthenticatedUser(array $params): SshSigningKey|WithoutBody
    {
        return $this->operators->users👷CreateSshSigningKeyForAuthenticatedUser()->call($params);
    }

    public function getSshSigningKeyForAuthenticatedUser(int $sshSigningKeyId): SshSigningKey|WithoutBody
    {
        return $this->operators->users👷GetSshSigningKeyForAuthenticatedUser()->call($sshSigningKeyId);
    }

    public function deleteSshSigningKeyForAuthenticatedUser(int $sshSigningKeyId): WithoutBody
    {
        return $this->operators->users👷DeleteSshSigningKeyForAuthenticatedUser()->call($sshSigningKeyId);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function list(int $since, int $perPage): iterable|WithoutBody
    {
        return $this->operators->users👷List_()->call($since, $perPage);
    }

    public function getByUsername(string $username): PrivateUser|PublicUser
    {
        return $this->operators->users👷GetByUsername()->call($username);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listFollowersForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowersForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listFollowersForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowersForUserListing()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listFollowingForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowingForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listFollowingForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListFollowingForUserListing()->call($username, $perPage, $page);
    }

    public function checkFollowingForUser(string $username, string $targetUser): WithoutBody
    {
        return $this->operators->users👷CheckFollowingForUser()->call($username, $targetUser);
    }

    /** @return iterable<int,Schema\GpgKey> */
    public function listGpgKeysForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListGpgKeysForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\GpgKey> */
    public function listGpgKeysForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListGpgKeysForUserListing()->call($username, $perPage, $page);
    }

    public function getContextForUser(string $username, string $subjectType, string $subjectId): Hovercard
    {
        return $this->operators->users👷GetContextForUser()->call($username, $subjectType, $subjectId);
    }

    /** @return iterable<int,Schema\KeySimple> */
    public function listPublicKeysForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListPublicKeysForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\KeySimple> */
    public function listPublicKeysForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListPublicKeysForUserListing()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\SshSigningKey> */
    public function listSshSigningKeysForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListSshSigningKeysForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\SshSigningKey> */
    public function listSshSigningKeysForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->users👷ListSshSigningKeysForUserListing()->call($username, $perPage, $page);
    }
}
