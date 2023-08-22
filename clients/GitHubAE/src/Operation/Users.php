<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Users
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getAuthenticated(): Schema\Operations\Users\GetAuthenticated\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Users\GetAuthenticated::class, $this->operator) === false) {
            $this->operator[Operator\Users\GetAuthenticated::class] = new Operator\Users\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->operator[Operator\Users\GetAuthenticated::class]->call();
    }

    public function updateAuthenticated(array $params): Schema\PrivateUser
    {
        if (array_key_exists(Operator\Users\UpdateAuthenticated::class, $this->operator) === false) {
            $this->operator[Operator\Users\UpdateAuthenticated::class] = new Operator\Users\UpdateAuthenticated($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->operator[Operator\Users\UpdateAuthenticated::class]->call($params);
    }

    public function listFollowersForAuthenticatedUser(int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowersForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowersForAuthenticatedUser::class] = new Operator\Users\ListFollowersForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());
        }

        return $this->operator[Operator\Users\ListFollowersForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listFollowersForAuthenticatedUserListing(int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowersForAuthenticatedUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowersForAuthenticatedUserListing::class] = new Operator\Users\ListFollowersForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());
        }

        return $this->operator[Operator\Users\ListFollowersForAuthenticatedUserListing::class]->call($perPage, $page);
    }

    public function listFollowedByAuthenticatedUser(int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowedByAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowedByAuthenticatedUser::class] = new Operator\Users\ListFollowedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());
        }

        return $this->operator[Operator\Users\ListFollowedByAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listFollowedByAuthenticatedUserListing(int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowedByAuthenticatedUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowedByAuthenticatedUserListing::class] = new Operator\Users\ListFollowedByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());
        }

        return $this->operator[Operator\Users\ListFollowedByAuthenticatedUserListing::class]->call($perPage, $page);
    }

    public function checkPersonIsFollowedByAuthenticated(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Users\CheckPersonIsFollowedByAuthenticated::class, $this->operator) === false) {
            $this->operator[Operator\Users\CheckPersonIsFollowedByAuthenticated::class] = new Operator\Users\CheckPersonIsFollowedByAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->operator[Operator\Users\CheckPersonIsFollowedByAuthenticated::class]->call($username);
    }

    public function follow(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Users\Follow::class, $this->operator) === false) {
            $this->operator[Operator\Users\Follow::class] = new Operator\Users\Follow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->operator[Operator\Users\Follow::class]->call($username);
    }

    public function unfollow(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Users\Unfollow::class, $this->operator) === false) {
            $this->operator[Operator\Users\Unfollow::class] = new Operator\Users\Unfollow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->operator[Operator\Users\Unfollow::class]->call($username);
    }

    public function listGpgKeysForAuthenticatedUser(int $perPage, int $page): Schema\GpgKey
    {
        if (array_key_exists(Operator\Users\ListGpgKeysForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListGpgKeysForAuthenticatedUser::class] = new Operator\Users\ListGpgKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->operator[Operator\Users\ListGpgKeysForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listGpgKeysForAuthenticatedUserListing(int $perPage, int $page): Schema\GpgKey
    {
        if (array_key_exists(Operator\Users\ListGpgKeysForAuthenticatedUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListGpgKeysForAuthenticatedUserListing::class] = new Operator\Users\ListGpgKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->operator[Operator\Users\ListGpgKeysForAuthenticatedUserListing::class]->call($perPage, $page);
    }

    public function createGpgKeyForAuthenticatedUser(array $params): Schema\GpgKey
    {
        if (array_key_exists(Operator\Users\CreateGpgKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\CreateGpgKeyForAuthenticatedUser::class] = new Operator\Users\CreateGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->operator[Operator\Users\CreateGpgKeyForAuthenticatedUser::class]->call($params);
    }

    public function getGpgKeyForAuthenticatedUser(int $gpgKeyId): Schema\GpgKey
    {
        if (array_key_exists(Operator\Users\GetGpgKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\GetGpgKeyForAuthenticatedUser::class] = new Operator\Users\GetGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->operator[Operator\Users\GetGpgKeyForAuthenticatedUser::class]->call($gpgKeyId);
    }

    public function deleteGpgKeyForAuthenticatedUser(int $gpgKeyId): ResponseInterface
    {
        if (array_key_exists(Operator\Users\DeleteGpgKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\DeleteGpgKeyForAuthenticatedUser::class] = new Operator\Users\DeleteGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->operator[Operator\Users\DeleteGpgKeyForAuthenticatedUser::class]->call($gpgKeyId);
    }

    public function listPublicSshKeysForAuthenticatedUser(int $perPage, int $page): Schema\Key
    {
        if (array_key_exists(Operator\Users\ListPublicSshKeysForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListPublicSshKeysForAuthenticatedUser::class] = new Operator\Users\ListPublicSshKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->operator[Operator\Users\ListPublicSshKeysForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listPublicSshKeysForAuthenticatedUserListing(int $perPage, int $page): Schema\Key
    {
        if (array_key_exists(Operator\Users\ListPublicSshKeysForAuthenticatedUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListPublicSshKeysForAuthenticatedUserListing::class] = new Operator\Users\ListPublicSshKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->operator[Operator\Users\ListPublicSshKeysForAuthenticatedUserListing::class]->call($perPage, $page);
    }

    public function createPublicSshKeyForAuthenticatedUser(array $params): Schema\Key
    {
        if (array_key_exists(Operator\Users\CreatePublicSshKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\CreatePublicSshKeyForAuthenticatedUser::class] = new Operator\Users\CreatePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->operator[Operator\Users\CreatePublicSshKeyForAuthenticatedUser::class]->call($params);
    }

    public function getPublicSshKeyForAuthenticatedUser(int $keyId): Schema\Key
    {
        if (array_key_exists(Operator\Users\GetPublicSshKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\GetPublicSshKeyForAuthenticatedUser::class] = new Operator\Users\GetPublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->operator[Operator\Users\GetPublicSshKeyForAuthenticatedUser::class]->call($keyId);
    }

    public function deletePublicSshKeyForAuthenticatedUser(int $keyId): ResponseInterface
    {
        if (array_key_exists(Operator\Users\DeletePublicSshKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\DeletePublicSshKeyForAuthenticatedUser::class] = new Operator\Users\DeletePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->operator[Operator\Users\DeletePublicSshKeyForAuthenticatedUser::class]->call($keyId);
    }

    public function list(int $since, int $perPage): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\List_::class, $this->operator) === false) {
            $this->operator[Operator\Users\List_::class] = new Operator\Users\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users());
        }

        return $this->operator[Operator\Users\List_::class]->call($since, $perPage);
    }

    public function getByUsername(string $username): Schema\Operations\Users\GetByUsername\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Users\GetByUsername::class, $this->operator) === false) {
            $this->operator[Operator\Users\GetByUsername::class] = new Operator\Users\GetByUsername($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username());
        }

        return $this->operator[Operator\Users\GetByUsername::class]->call($username);
    }

    public function listFollowersForUser(string $username, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowersForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowersForUser::class] = new Operator\Users\ListFollowersForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());
        }

        return $this->operator[Operator\Users\ListFollowersForUser::class]->call($username, $perPage, $page);
    }

    public function listFollowersForUserListing(string $username, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowersForUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowersForUserListing::class] = new Operator\Users\ListFollowersForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());
        }

        return $this->operator[Operator\Users\ListFollowersForUserListing::class]->call($username, $perPage, $page);
    }

    public function listFollowingForUser(string $username, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowingForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowingForUser::class] = new Operator\Users\ListFollowingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());
        }

        return $this->operator[Operator\Users\ListFollowingForUser::class]->call($username, $perPage, $page);
    }

    public function listFollowingForUserListing(string $username, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowingForUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowingForUserListing::class] = new Operator\Users\ListFollowingForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());
        }

        return $this->operator[Operator\Users\ListFollowingForUserListing::class]->call($username, $perPage, $page);
    }

    public function checkFollowingForUser(string $username, string $targetUser): ResponseInterface
    {
        if (array_key_exists(Operator\Users\CheckFollowingForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\CheckFollowingForUser::class] = new Operator\Users\CheckFollowingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following🌀TargetUser());
        }

        return $this->operator[Operator\Users\CheckFollowingForUser::class]->call($username, $targetUser);
    }

    public function listGpgKeysForUser(string $username, int $perPage, int $page): Schema\GpgKey
    {
        if (array_key_exists(Operator\Users\ListGpgKeysForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListGpgKeysForUser::class] = new Operator\Users\ListGpgKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());
        }

        return $this->operator[Operator\Users\ListGpgKeysForUser::class]->call($username, $perPage, $page);
    }

    public function listGpgKeysForUserListing(string $username, int $perPage, int $page): Schema\GpgKey
    {
        if (array_key_exists(Operator\Users\ListGpgKeysForUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListGpgKeysForUserListing::class] = new Operator\Users\ListGpgKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());
        }

        return $this->operator[Operator\Users\ListGpgKeysForUserListing::class]->call($username, $perPage, $page);
    }

    public function getContextForUser(string $username, string $subjectType, string $subjectId): Schema\Hovercard
    {
        if (array_key_exists(Operator\Users\GetContextForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\GetContextForUser::class] = new Operator\Users\GetContextForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Hovercard());
        }

        return $this->operator[Operator\Users\GetContextForUser::class]->call($username, $subjectType, $subjectId);
    }

    public function listPublicKeysForUser(string $username, int $perPage, int $page): Schema\KeySimple
    {
        if (array_key_exists(Operator\Users\ListPublicKeysForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListPublicKeysForUser::class] = new Operator\Users\ListPublicKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());
        }

        return $this->operator[Operator\Users\ListPublicKeysForUser::class]->call($username, $perPage, $page);
    }

    public function listPublicKeysForUserListing(string $username, int $perPage, int $page): Schema\KeySimple
    {
        if (array_key_exists(Operator\Users\ListPublicKeysForUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListPublicKeysForUserListing::class] = new Operator\Users\ListPublicKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());
        }

        return $this->operator[Operator\Users\ListPublicKeysForUserListing::class]->call($username, $perPage, $page);
    }
}
