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

final class EnterpriseAdmin
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listGlobalWebhooks(int $perPage, int $page): Schema\GlobalHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListGlobalWebhooks::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListGlobalWebhooks::class] = new Operator\EnterpriseAdmin\ListGlobalWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListGlobalWebhooks::class]->call($perPage, $page);
    }

    public function listGlobalWebhooksListing(int $perPage, int $page): Schema\GlobalHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListGlobalWebhooksListing::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListGlobalWebhooksListing::class] = new Operator\EnterpriseAdmin\ListGlobalWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListGlobalWebhooksListing::class]->call($perPage, $page);
    }

    public function createGlobalWebhook(string $accept, array $params): Schema\GlobalHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateGlobalWebhook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateGlobalWebhook::class] = new Operator\EnterpriseAdmin\CreateGlobalWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateGlobalWebhook::class]->call($accept, $params);
    }

    public function getGlobalWebhook(int $hookId, string $accept): Schema\GlobalHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetGlobalWebhook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetGlobalWebhook::class] = new Operator\EnterpriseAdmin\GetGlobalWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetGlobalWebhook::class]->call($hookId, $accept);
    }

    public function deleteGlobalWebhook(int $hookId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteGlobalWebhook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteGlobalWebhook::class] = new Operator\EnterpriseAdmin\DeleteGlobalWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteGlobalWebhook::class]->call($hookId);
    }

    public function updateGlobalWebhook(int $hookId, string $accept, array $params): Schema\GlobalHook2
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdateGlobalWebhook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdateGlobalWebhook::class] = new Operator\EnterpriseAdmin\UpdateGlobalWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdateGlobalWebhook::class]->call($hookId, $accept, $params);
    }

    public function pingGlobalWebhook(int $hookId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\PingGlobalWebhook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\PingGlobalWebhook::class] = new Operator\EnterpriseAdmin\PingGlobalWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Hooks🌀HookId🌀Pings());
        }

        return $this->operator[Operator\EnterpriseAdmin\PingGlobalWebhook::class]->call($hookId);
    }

    public function listPublicKeys(string $since, int $perPage, int $page, string $direction, string $sort): Schema\PublicKeyFull
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPublicKeys::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPublicKeys::class] = new Operator\EnterpriseAdmin\ListPublicKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Keys());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPublicKeys::class]->call($since, $perPage, $page, $direction, $sort);
    }

    public function listPublicKeysListing(string $since, int $perPage, int $page, string $direction, string $sort): Schema\PublicKeyFull
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPublicKeysListing::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPublicKeysListing::class] = new Operator\EnterpriseAdmin\ListPublicKeysListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Keys());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPublicKeysListing::class]->call($since, $perPage, $page, $direction, $sort);
    }

    public function deletePublicKey(string $keyIds): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeletePublicKey::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeletePublicKey::class] = new Operator\EnterpriseAdmin\DeletePublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Keys🌀KeyIds());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeletePublicKey::class]->call($keyIds);
    }

    public function updateLdapMappingForTeam(int $teamId, array $params): Schema\LdapMappingTeam
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdateLdapMappingForTeam::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdateLdapMappingForTeam::class] = new Operator\EnterpriseAdmin\UpdateLdapMappingForTeam($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Mapping());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdateLdapMappingForTeam::class]->call($teamId, $params);
    }

    public function syncLdapMappingForTeam(int $teamId): Schema\Operations\EnterpriseAdmin\SyncLdapMappingForTeam\Response\ApplicationJson\Created
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SyncLdapMappingForTeam::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SyncLdapMappingForTeam::class] = new Operator\EnterpriseAdmin\SyncLdapMappingForTeam($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀TeamId🌀Sync());
        }

        return $this->operator[Operator\EnterpriseAdmin\SyncLdapMappingForTeam::class]->call($teamId);
    }

    public function updateLdapMappingForUser(string $username, array $params): Schema\LdapMappingUser
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdateLdapMappingForUser::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdateLdapMappingForUser::class] = new Operator\EnterpriseAdmin\UpdateLdapMappingForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀Username🌀Mapping());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdateLdapMappingForUser::class]->call($username, $params);
    }

    public function syncLdapMappingForUser(string $username): Schema\Operations\EnterpriseAdmin\SyncLdapMappingForUser\Response\ApplicationJson\Created
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SyncLdapMappingForUser::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SyncLdapMappingForUser::class] = new Operator\EnterpriseAdmin\SyncLdapMappingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀Username🌀Sync());
        }

        return $this->operator[Operator\EnterpriseAdmin\SyncLdapMappingForUser::class]->call($username);
    }

    public function createOrg(array $params): Schema\OrganizationSimple
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateOrg::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateOrg::class] = new Operator\EnterpriseAdmin\CreateOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateOrg::class]->call($params);
    }

    public function updateOrgName(string $org, array $params): Schema\Operations\EnterpriseAdmin\UpdateOrgName\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdateOrgName::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdateOrgName::class] = new Operator\EnterpriseAdmin\UpdateOrgName($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Organizations🌀Org());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdateOrgName::class]->call($org, $params);
    }

    public function listPreReceiveEnvironments(int $perPage, int $page, string $direction, string $sort): Schema\PreReceiveEnvironment
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPreReceiveEnvironments::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPreReceiveEnvironments::class] = new Operator\EnterpriseAdmin\ListPreReceiveEnvironments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPreReceiveEnvironments::class]->call($perPage, $page, $direction, $sort);
    }

    public function listPreReceiveEnvironmentsListing(int $perPage, int $page, string $direction, string $sort): Schema\PreReceiveEnvironment
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPreReceiveEnvironmentsListing::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPreReceiveEnvironmentsListing::class] = new Operator\EnterpriseAdmin\ListPreReceiveEnvironmentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPreReceiveEnvironmentsListing::class]->call($perPage, $page, $direction, $sort);
    }

    public function createPreReceiveEnvironment(array $params): Schema\PreReceiveEnvironment
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreatePreReceiveEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreatePreReceiveEnvironment::class] = new Operator\EnterpriseAdmin\CreatePreReceiveEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreatePreReceiveEnvironment::class]->call($params);
    }

    public function getPreReceiveEnvironment(int $preReceiveEnvironmentId): Schema\PreReceiveEnvironment
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetPreReceiveEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetPreReceiveEnvironment::class] = new Operator\EnterpriseAdmin\GetPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetPreReceiveEnvironment::class]->call($preReceiveEnvironmentId);
    }

    public function deletePreReceiveEnvironment(int $preReceiveEnvironmentId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeletePreReceiveEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeletePreReceiveEnvironment::class] = new Operator\EnterpriseAdmin\DeletePreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeletePreReceiveEnvironment::class]->call($preReceiveEnvironmentId);
    }

    public function updatePreReceiveEnvironment(int $preReceiveEnvironmentId, array $params): Schema\PreReceiveEnvironment
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment::class] = new Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdatePreReceiveEnvironment::class]->call($preReceiveEnvironmentId, $params);
    }

    public function startPreReceiveEnvironmentDownload(int $preReceiveEnvironmentId): Schema\PreReceiveEnvironmentDownloadStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload::class] = new Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads());
        }

        return $this->operator[Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownload::class]->call($preReceiveEnvironmentId);
    }

    public function startPreReceiveEnvironmentDownloadStreaming(int $preReceiveEnvironmentId): Schema\PreReceiveEnvironmentDownloadStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming::class] = new Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads());
        }

        return $this->operator[Operator\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming::class]->call($preReceiveEnvironmentId);
    }

    public function getDownloadStatusForPreReceiveEnvironment(int $preReceiveEnvironmentId): Schema\PreReceiveEnvironmentDownloadStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment::class] = new Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment::class]->call($preReceiveEnvironmentId);
    }

    public function getDownloadStatusForPreReceiveEnvironmentStreaming(int $preReceiveEnvironmentId): Schema\PreReceiveEnvironmentDownloadStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming::class] = new Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments🌀PreReceiveEnvironmentId🌀Downloads🌀Latest());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentStreaming::class]->call($preReceiveEnvironmentId);
    }

    public function listPreReceiveHooks(int $perPage, int $page, string $direction, string $sort): Schema\PreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPreReceiveHooks::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooks::class] = new Operator\EnterpriseAdmin\ListPreReceiveHooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooks::class]->call($perPage, $page, $direction, $sort);
    }

    public function listPreReceiveHooksListing(int $perPage, int $page, string $direction, string $sort): Schema\PreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPreReceiveHooksListing::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooksListing::class] = new Operator\EnterpriseAdmin\ListPreReceiveHooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooksListing::class]->call($perPage, $page, $direction, $sort);
    }

    public function createPreReceiveHook(array $params): Schema\PreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreatePreReceiveHook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreatePreReceiveHook::class] = new Operator\EnterpriseAdmin\CreatePreReceiveHook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreatePreReceiveHook::class]->call($params);
    }

    public function getPreReceiveHook(int $preReceiveHookId): Schema\PreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetPreReceiveHook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetPreReceiveHook::class] = new Operator\EnterpriseAdmin\GetPreReceiveHook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetPreReceiveHook::class]->call($preReceiveHookId);
    }

    public function deletePreReceiveHook(int $preReceiveHookId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeletePreReceiveHook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeletePreReceiveHook::class] = new Operator\EnterpriseAdmin\DeletePreReceiveHook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeletePreReceiveHook::class]->call($preReceiveHookId);
    }

    public function updatePreReceiveHook(int $preReceiveHookId, array $params): Schema\PreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdatePreReceiveHook::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdatePreReceiveHook::class] = new Operator\EnterpriseAdmin\UpdatePreReceiveHook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀PreReceiveHooks🌀PreReceiveHookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdatePreReceiveHook::class]->call($preReceiveHookId, $params);
    }

    public function listPersonalAccessTokens(int $perPage, int $page): Schema\Authorization
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPersonalAccessTokens::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPersonalAccessTokens::class] = new Operator\EnterpriseAdmin\ListPersonalAccessTokens($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Tokens());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPersonalAccessTokens::class]->call($perPage, $page);
    }

    public function listPersonalAccessTokensListing(int $perPage, int $page): Schema\Authorization
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPersonalAccessTokensListing::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPersonalAccessTokensListing::class] = new Operator\EnterpriseAdmin\ListPersonalAccessTokensListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Tokens());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPersonalAccessTokensListing::class]->call($perPage, $page);
    }

    public function deletePersonalAccessToken(int $tokenId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeletePersonalAccessToken::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeletePersonalAccessToken::class] = new Operator\EnterpriseAdmin\DeletePersonalAccessToken($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Tokens🌀TokenId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeletePersonalAccessToken::class]->call($tokenId);
    }

    public function createUser(array $params): Schema\SimpleUser
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateUser::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateUser::class] = new Operator\EnterpriseAdmin\CreateUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Users());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateUser::class]->call($params);
    }

    public function deleteUser(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteUser::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteUser::class] = new Operator\EnterpriseAdmin\DeleteUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀Username());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteUser::class]->call($username);
    }

    public function updateUsernameForUser(string $username, array $params): Schema\Operations\EnterpriseAdmin\UpdateUsernameForUser\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdateUsernameForUser::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdateUsernameForUser::class] = new Operator\EnterpriseAdmin\UpdateUsernameForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀Username());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdateUsernameForUser::class]->call($username, $params);
    }

    public function createImpersonationOAuthToken(string $username, array $params): Schema\Authorization
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateImpersonationOAuthToken::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateImpersonationOAuthToken::class] = new Operator\EnterpriseAdmin\CreateImpersonationOAuthToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀Username🌀Authorizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateImpersonationOAuthToken::class]->call($username, $params);
    }

    public function deleteImpersonationOAuthToken(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken::class] = new Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Admin🌀Users🌀Username🌀Authorizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteImpersonationOAuthToken::class]->call($username);
    }

    public function getAnnouncement(): Schema\Announcement
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetAnnouncement::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetAnnouncement::class] = new Operator\EnterpriseAdmin\GetAnnouncement($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetAnnouncement::class]->call();
    }

    public function removeAnnouncement(): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemoveAnnouncement::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemoveAnnouncement::class] = new Operator\EnterpriseAdmin\RemoveAnnouncement($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemoveAnnouncement::class]->call();
    }

    public function setAnnouncement(array $params): Schema\Announcement
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetAnnouncement::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetAnnouncement::class] = new Operator\EnterpriseAdmin\SetAnnouncement($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Announcement());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetAnnouncement::class]->call($params);
    }

    public function getLicenseInformation(): Schema\LicenseInfo
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetLicenseInformation::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetLicenseInformation::class] = new Operator\EnterpriseAdmin\GetLicenseInformation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Settings🌀License());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetLicenseInformation::class]->call();
    }

    public function getAllStats(): Schema\EnterpriseOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetAllStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetAllStats::class] = new Operator\EnterpriseAdmin\GetAllStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀All());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetAllStats::class]->call();
    }

    public function getCommentStats(): Schema\EnterpriseCommentOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetCommentStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetCommentStats::class] = new Operator\EnterpriseAdmin\GetCommentStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetCommentStats::class]->call();
    }

    public function getGistStats(): Schema\EnterpriseGistOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetGistStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetGistStats::class] = new Operator\EnterpriseAdmin\GetGistStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetGistStats::class]->call();
    }

    public function getHooksStats(): Schema\EnterpriseHookOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetHooksStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetHooksStats::class] = new Operator\EnterpriseAdmin\GetHooksStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetHooksStats::class]->call();
    }

    public function getIssueStats(): Schema\EnterpriseIssueOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetIssueStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetIssueStats::class] = new Operator\EnterpriseAdmin\GetIssueStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetIssueStats::class]->call();
    }

    public function getMilestoneStats(): Schema\EnterpriseMilestoneOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetMilestoneStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetMilestoneStats::class] = new Operator\EnterpriseAdmin\GetMilestoneStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetMilestoneStats::class]->call();
    }

    public function getOrgStats(): Schema\EnterpriseOrganizationOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetOrgStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetOrgStats::class] = new Operator\EnterpriseAdmin\GetOrgStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetOrgStats::class]->call();
    }

    public function getPagesStats(): Schema\EnterprisePageOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetPagesStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetPagesStats::class] = new Operator\EnterpriseAdmin\GetPagesStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetPagesStats::class]->call();
    }

    public function getPullRequestStats(): Schema\EnterprisePullRequestOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetPullRequestStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetPullRequestStats::class] = new Operator\EnterpriseAdmin\GetPullRequestStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetPullRequestStats::class]->call();
    }

    public function getRepoStats(): Schema\EnterpriseRepositoryOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetRepoStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetRepoStats::class] = new Operator\EnterpriseAdmin\GetRepoStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetRepoStats::class]->call();
    }

    public function getUserStats(): Schema\EnterpriseUserOverview
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetUserStats::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetUserStats::class] = new Operator\EnterpriseAdmin\GetUserStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprise🌀Stats🌀Users());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetUserStats::class]->call();
    }

    public function getGithubActionsPermissionsEnterprise(string $enterprise): Schema\ActionsEnterprisePermissions
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise::class] = new Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise::class]->call($enterprise);
    }

    public function setGithubActionsPermissionsEnterprise(string $enterprise, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise::class] = new Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise::class]->call($enterprise, $params);
    }

    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise::class]->call($enterprise, $perPage, $page);
    }

    public function setSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise::class]->call($enterprise, $params);
    }

    public function enableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations🌀OrgId());
        }

        return $this->operator[Operator\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise::class]->call($enterprise, $orgId);
    }

    public function disableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $orgId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise::class] = new Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀Organizations🌀OrgId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise::class]->call($enterprise, $orgId);
    }

    public function getAllowedActionsEnterprise(string $enterprise): Schema\SelectedActions
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetAllowedActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetAllowedActionsEnterprise::class] = new Operator\EnterpriseAdmin\GetAllowedActionsEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetAllowedActionsEnterprise::class]->call($enterprise);
    }

    public function setAllowedActionsEnterprise(string $enterprise, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetAllowedActionsEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetAllowedActionsEnterprise::class] = new Operator\EnterpriseAdmin\SetAllowedActionsEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetAllowedActionsEnterprise::class]->call($enterprise, $params);
    }

    public function listSelfHostedRunnerGroupsForEnterprise(string $enterprise, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise::class] = new Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise::class]->call($enterprise, $perPage, $page);
    }

    public function createSelfHostedRunnerGroupForEnterprise(string $enterprise, array $params): Schema\RunnerGroupsEnterprise
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise::class] = new Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise::class]->call($enterprise, $params);
    }

    public function getSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId): Schema\RunnerGroupsEnterprise
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise::class] = new Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise::class]->call($enterprise, $runnerGroupId);
    }

    public function deleteSelfHostedRunnerGroupFromEnterprise(string $enterprise, int $runnerGroupId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise::class] = new Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise::class]->call($enterprise, $runnerGroupId);
    }

    public function updateSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): Schema\RunnerGroupsEnterprise
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise::class] = new Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $params);
    }

    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise::class] = new Operator\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise::class]->call($enterprise, $runnerGroupId, $perPage, $page);
    }

    public function setOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise::class] = new Operator\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise::class]->call($enterprise, $runnerGroupId, $params);
    }

    public function addOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $orgId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise::class] = new Operator\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations🌀OrgId());
        }

        return $this->operator[Operator\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise::class]->call($enterprise, $runnerGroupId, $orgId);
    }

    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runnerGroupId, int $orgId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise::class] = new Operator\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Organizations🌀OrgId());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise::class]->call($enterprise, $runnerGroupId, $orgId);
    }

    public function listSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise::class] = new Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $perPage, $page);
    }

    public function setSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runnerGroupId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise::class] = new Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $params);
    }

    public function addSelfHostedRunnerToGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise::class] = new Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $runnerId);
    }

    public function removeSelfHostedRunnerFromGroupForEnterprise(string $enterprise, int $runnerGroupId, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise::class] = new Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀RunnerGroups🌀RunnerGroupId🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise::class]->call($enterprise, $runnerGroupId, $runnerId);
    }

    public function listSelfHostedRunnersForEnterprise(string $enterprise, int $perPage, int $page): Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise::class] = new Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise::class]->call($enterprise, $perPage, $page);
    }

    public function listRunnerApplicationsForEnterprise(string $enterprise): Schema\RunnerApplication
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise::class] = new Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀Downloads());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListRunnerApplicationsForEnterprise::class]->call($enterprise);
    }

    public function createRegistrationTokenForEnterprise(string $enterprise): Schema\AuthenticationToken
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise::class] = new Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateRegistrationTokenForEnterprise::class]->call($enterprise);
    }

    public function createRemoveTokenForEnterprise(string $enterprise): Schema\AuthenticationToken
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise::class] = new Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateRemoveTokenForEnterprise::class]->call($enterprise);
    }

    public function getSelfHostedRunnerForEnterprise(string $enterprise, int $runnerId): Schema\Runner
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise::class] = new Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise::class]->call($enterprise, $runnerId);
    }

    public function deleteSelfHostedRunnerFromEnterprise(string $enterprise, int $runnerId): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise::class] = new Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise::class]->call($enterprise, $runnerId);
    }

    public function listPreReceiveHooksForOrg(string $org, int $perPage, int $page, string $direction, string $sort): Schema\OrgPreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPreReceiveHooksForOrg::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooksForOrg::class] = new Operator\EnterpriseAdmin\ListPreReceiveHooksForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooksForOrg::class]->call($org, $perPage, $page, $direction, $sort);
    }

    public function listPreReceiveHooksForOrgListing(string $org, int $perPage, int $page, string $direction, string $sort): Schema\OrgPreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPreReceiveHooksForOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooksForOrgListing::class] = new Operator\EnterpriseAdmin\ListPreReceiveHooksForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooksForOrgListing::class]->call($org, $perPage, $page, $direction, $sort);
    }

    public function getPreReceiveHookForOrg(string $org, int $preReceiveHookId): Schema\OrgPreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetPreReceiveHookForOrg::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetPreReceiveHookForOrg::class] = new Operator\EnterpriseAdmin\GetPreReceiveHookForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetPreReceiveHookForOrg::class]->call($org, $preReceiveHookId);
    }

    public function removePreReceiveHookEnforcementForOrg(string $org, int $preReceiveHookId): Schema\OrgPreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg::class] = new Operator\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg::class]->call($org, $preReceiveHookId);
    }

    public function updatePreReceiveHookEnforcementForOrg(string $org, int $preReceiveHookId, array $params): Schema\OrgPreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg::class] = new Operator\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PreReceiveHooks🌀PreReceiveHookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg::class]->call($org, $preReceiveHookId, $params);
    }

    public function listPreReceiveHooksForRepo(string $owner, string $repo, int $perPage, int $page, string $direction, string $sort): Schema\RepositoryPreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPreReceiveHooksForRepo::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooksForRepo::class] = new Operator\EnterpriseAdmin\ListPreReceiveHooksForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooksForRepo::class]->call($owner, $repo, $perPage, $page, $direction, $sort);
    }

    public function listPreReceiveHooksForRepoListing(string $owner, string $repo, int $perPage, int $page, string $direction, string $sort): Schema\RepositoryPreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\ListPreReceiveHooksForRepoListing::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooksForRepoListing::class] = new Operator\EnterpriseAdmin\ListPreReceiveHooksForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks());
        }

        return $this->operator[Operator\EnterpriseAdmin\ListPreReceiveHooksForRepoListing::class]->call($owner, $repo, $perPage, $page, $direction, $sort);
    }

    public function getPreReceiveHookForRepo(string $owner, string $repo, int $preReceiveHookId): Schema\RepositoryPreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetPreReceiveHookForRepo::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetPreReceiveHookForRepo::class] = new Operator\EnterpriseAdmin\GetPreReceiveHookForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetPreReceiveHookForRepo::class]->call($owner, $repo, $preReceiveHookId);
    }

    public function removePreReceiveHookEnforcementForRepo(string $owner, string $repo, int $preReceiveHookId): Schema\RepositoryPreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo::class] = new Operator\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo::class]->call($owner, $repo, $preReceiveHookId);
    }

    public function updatePreReceiveHookEnforcementForRepo(string $owner, string $repo, int $preReceiveHookId, array $params): Schema\RepositoryPreReceiveHook
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo::class] = new Operator\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PreReceiveHooks🌀PreReceiveHookId());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo::class]->call($owner, $repo, $preReceiveHookId, $params);
    }

    public function getConfigurationStatus(): Schema\ConfigurationStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetConfigurationStatus::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetConfigurationStatus::class] = new Operator\EnterpriseAdmin\GetConfigurationStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Configcheck());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetConfigurationStatus::class]->call();
    }

    public function startConfigurationProcess(): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\StartConfigurationProcess::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\StartConfigurationProcess::class] = new Operator\EnterpriseAdmin\StartConfigurationProcess($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Configure());
        }

        return $this->operator[Operator\EnterpriseAdmin\StartConfigurationProcess::class]->call();
    }

    public function getMaintenanceStatus(): Schema\MaintenanceStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetMaintenanceStatus::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetMaintenanceStatus::class] = new Operator\EnterpriseAdmin\GetMaintenanceStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetMaintenanceStatus::class]->call();
    }

    public function enableOrDisableMaintenanceMode(array $params): Schema\MaintenanceStatus
    {
        if (array_key_exists(Operator\EnterpriseAdmin\EnableOrDisableMaintenanceMode::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\EnableOrDisableMaintenanceMode::class] = new Operator\EnterpriseAdmin\EnableOrDisableMaintenanceMode($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance());
        }

        return $this->operator[Operator\EnterpriseAdmin\EnableOrDisableMaintenanceMode::class]->call($params);
    }

    public function getSettings(): Schema\EnterpriseSettings
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetSettings::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetSettings::class] = new Operator\EnterpriseAdmin\GetSettings($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetSettings::class]->call();
    }

    public function setSettings(array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SetSettings::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SetSettings::class] = new Operator\EnterpriseAdmin\SetSettings($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings());
        }

        return $this->operator[Operator\EnterpriseAdmin\SetSettings::class]->call($params);
    }

    public function getAllAuthorizedSshKeys(): Schema\SshKey
    {
        if (array_key_exists(Operator\EnterpriseAdmin\GetAllAuthorizedSshKeys::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\GetAllAuthorizedSshKeys::class] = new Operator\EnterpriseAdmin\GetAllAuthorizedSshKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys());
        }

        return $this->operator[Operator\EnterpriseAdmin\GetAllAuthorizedSshKeys::class]->call();
    }

    public function addAuthorizedSshKey(array $params): Schema\SshKey
    {
        if (array_key_exists(Operator\EnterpriseAdmin\AddAuthorizedSshKey::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\AddAuthorizedSshKey::class] = new Operator\EnterpriseAdmin\AddAuthorizedSshKey($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys());
        }

        return $this->operator[Operator\EnterpriseAdmin\AddAuthorizedSshKey::class]->call($params);
    }

    public function removeAuthorizedSshKey(array $params): Schema\SshKey
    {
        if (array_key_exists(Operator\EnterpriseAdmin\RemoveAuthorizedSshKey::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\RemoveAuthorizedSshKey::class] = new Operator\EnterpriseAdmin\RemoveAuthorizedSshKey($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys());
        }

        return $this->operator[Operator\EnterpriseAdmin\RemoveAuthorizedSshKey::class]->call($params);
    }

    public function createEnterpriseServerLicense(array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\CreateEnterpriseServerLicense::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\CreateEnterpriseServerLicense::class] = new Operator\EnterpriseAdmin\CreateEnterpriseServerLicense($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Start());
        }

        return $this->operator[Operator\EnterpriseAdmin\CreateEnterpriseServerLicense::class]->call($params);
    }

    public function upgradeLicense(array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UpgradeLicense::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UpgradeLicense::class] = new Operator\EnterpriseAdmin\UpgradeLicense($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Setup🌀Api🌀Upgrade());
        }

        return $this->operator[Operator\EnterpriseAdmin\UpgradeLicense::class]->call($params);
    }

    public function promoteUserToBeSiteAdministrator(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\PromoteUserToBeSiteAdministrator::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\PromoteUserToBeSiteAdministrator::class] = new Operator\EnterpriseAdmin\PromoteUserToBeSiteAdministrator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SiteAdmin());
        }

        return $this->operator[Operator\EnterpriseAdmin\PromoteUserToBeSiteAdministrator::class]->call($username);
    }

    public function demoteSiteAdministrator(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\DemoteSiteAdministrator::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\DemoteSiteAdministrator::class] = new Operator\EnterpriseAdmin\DemoteSiteAdministrator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SiteAdmin());
        }

        return $this->operator[Operator\EnterpriseAdmin\DemoteSiteAdministrator::class]->call($username);
    }

    public function suspendUser(string $username, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\SuspendUser::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\SuspendUser::class] = new Operator\EnterpriseAdmin\SuspendUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Suspended());
        }

        return $this->operator[Operator\EnterpriseAdmin\SuspendUser::class]->call($username, $params);
    }

    public function unsuspendUser(string $username, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\EnterpriseAdmin\UnsuspendUser::class, $this->operator) === false) {
            $this->operator[Operator\EnterpriseAdmin\UnsuspendUser::class] = new Operator\EnterpriseAdmin\UnsuspendUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Suspended());
        }

        return $this->operator[Operator\EnterpriseAdmin\UnsuspendUser::class]->call($username, $params);
    }
}
