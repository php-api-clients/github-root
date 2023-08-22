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

final class Apps
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getAuthenticated(): Schema\Integration
    {
        if (array_key_exists(Operator\Apps\GetAuthenticated::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetAuthenticated::class] = new Operator\Apps\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App());
        }

        return $this->operator[Operator\Apps\GetAuthenticated::class]->call();
    }

    public function createFromManifest(string $code): Schema\Operations\Apps\CreateFromManifest\Response\ApplicationJson\Created
    {
        if (array_key_exists(Operator\Apps\CreateFromManifest::class, $this->operator) === false) {
            $this->operator[Operator\Apps\CreateFromManifest::class] = new Operator\Apps\CreateFromManifest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions());
        }

        return $this->operator[Operator\Apps\CreateFromManifest::class]->call($code);
    }

    public function getWebhookConfigForApp(): Schema\WebhookConfig
    {
        if (array_key_exists(Operator\Apps\GetWebhookConfigForApp::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetWebhookConfigForApp::class] = new Operator\Apps\GetWebhookConfigForApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->operator[Operator\Apps\GetWebhookConfigForApp::class]->call();
    }

    public function updateWebhookConfigForApp(array $params): Schema\WebhookConfig
    {
        if (array_key_exists(Operator\Apps\UpdateWebhookConfigForApp::class, $this->operator) === false) {
            $this->operator[Operator\Apps\UpdateWebhookConfigForApp::class] = new Operator\Apps\UpdateWebhookConfigForApp($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->operator[Operator\Apps\UpdateWebhookConfigForApp::class]->call($params);
    }

    public function listWebhookDeliveries(string $cursor, bool $redelivery, int $perPage): Schema\HookDeliveryItem
    {
        if (array_key_exists(Operator\Apps\ListWebhookDeliveries::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListWebhookDeliveries::class] = new Operator\Apps\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries());
        }

        return $this->operator[Operator\Apps\ListWebhookDeliveries::class]->call($cursor, $redelivery, $perPage);
    }

    public function getWebhookDelivery(int $deliveryId): Schema\HookDelivery
    {
        if (array_key_exists(Operator\Apps\GetWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetWebhookDelivery::class] = new Operator\Apps\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId());
        }

        return $this->operator[Operator\Apps\GetWebhookDelivery::class]->call($deliveryId);
    }

    public function redeliverWebhookDelivery(int $deliveryId): Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\Apps\RedeliverWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Apps\RedeliverWebhookDelivery::class] = new Operator\Apps\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->operator[Operator\Apps\RedeliverWebhookDelivery::class]->call($deliveryId);
    }

    public function listInstallations(string $since, string $outdated, int $perPage, int $page): Schema\Installation
    {
        if (array_key_exists(Operator\Apps\ListInstallations::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListInstallations::class] = new Operator\Apps\ListInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations());
        }

        return $this->operator[Operator\Apps\ListInstallations::class]->call($since, $outdated, $perPage, $page);
    }

    public function listInstallationsListing(string $since, string $outdated, int $perPage, int $page): Schema\Installation
    {
        if (array_key_exists(Operator\Apps\ListInstallationsListing::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListInstallationsListing::class] = new Operator\Apps\ListInstallationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations());
        }

        return $this->operator[Operator\Apps\ListInstallationsListing::class]->call($since, $outdated, $perPage, $page);
    }

    public function getInstallation(int $installationId): Schema\Installation
    {
        if (array_key_exists(Operator\Apps\GetInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetInstallation::class] = new Operator\Apps\GetInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->operator[Operator\Apps\GetInstallation::class]->call($installationId);
    }

    public function deleteInstallation(int $installationId): ResponseInterface
    {
        if (array_key_exists(Operator\Apps\DeleteInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\DeleteInstallation::class] = new Operator\Apps\DeleteInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->operator[Operator\Apps\DeleteInstallation::class]->call($installationId);
    }

    public function createInstallationAccessToken(int $installationId, array $params): Schema\InstallationToken
    {
        if (array_key_exists(Operator\Apps\CreateInstallationAccessToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\CreateInstallationAccessToken::class] = new Operator\Apps\CreateInstallationAccessToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens());
        }

        return $this->operator[Operator\Apps\CreateInstallationAccessToken::class]->call($installationId, $params);
    }

    public function suspendInstallation(int $installationId): ResponseInterface
    {
        if (array_key_exists(Operator\Apps\SuspendInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\SuspendInstallation::class] = new Operator\Apps\SuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->operator[Operator\Apps\SuspendInstallation::class]->call($installationId);
    }

    public function unsuspendInstallation(int $installationId): ResponseInterface
    {
        if (array_key_exists(Operator\Apps\UnsuspendInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\UnsuspendInstallation::class] = new Operator\Apps\UnsuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->operator[Operator\Apps\UnsuspendInstallation::class]->call($installationId);
    }

    public function deleteAuthorization(string $clientId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Apps\DeleteAuthorization::class, $this->operator) === false) {
            $this->operator[Operator\Apps\DeleteAuthorization::class] = new Operator\Apps\DeleteAuthorization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Grant());
        }

        return $this->operator[Operator\Apps\DeleteAuthorization::class]->call($clientId, $params);
    }

    public function revokeGrantForApplication(string $clientId, string $accessToken): ResponseInterface
    {
        if (array_key_exists(Operator\Apps\RevokeGrantForApplication::class, $this->operator) === false) {
            $this->operator[Operator\Apps\RevokeGrantForApplication::class] = new Operator\Apps\RevokeGrantForApplication($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Grants🌀AccessToken());
        }

        return $this->operator[Operator\Apps\RevokeGrantForApplication::class]->call($clientId, $accessToken);
    }

    public function checkToken(string $clientId, array $params): Schema\Authorization
    {
        if (array_key_exists(Operator\Apps\CheckToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\CheckToken::class] = new Operator\Apps\CheckToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->operator[Operator\Apps\CheckToken::class]->call($clientId, $params);
    }

    public function deleteToken(string $clientId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Apps\DeleteToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\DeleteToken::class] = new Operator\Apps\DeleteToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->operator[Operator\Apps\DeleteToken::class]->call($clientId, $params);
    }

    public function resetToken(string $clientId, array $params): Schema\Authorization
    {
        if (array_key_exists(Operator\Apps\ResetToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ResetToken::class] = new Operator\Apps\ResetToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->operator[Operator\Apps\ResetToken::class]->call($clientId, $params);
    }

    public function scopeToken(string $clientId, array $params): Schema\Authorization
    {
        if (array_key_exists(Operator\Apps\ScopeToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ScopeToken::class] = new Operator\Apps\ScopeToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token🌀Scoped());
        }

        return $this->operator[Operator\Apps\ScopeToken::class]->call($clientId, $params);
    }

    public function checkAuthorization(string $clientId, string $accessToken): Schema\Operations\Apps\CheckAuthorization\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Apps\CheckAuthorization::class, $this->operator) === false) {
            $this->operator[Operator\Apps\CheckAuthorization::class] = new Operator\Apps\CheckAuthorization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Tokens🌀AccessToken());
        }

        return $this->operator[Operator\Apps\CheckAuthorization::class]->call($clientId, $accessToken);
    }

    public function resetAuthorization(string $clientId, string $accessToken): Schema\Authorization
    {
        if (array_key_exists(Operator\Apps\ResetAuthorization::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ResetAuthorization::class] = new Operator\Apps\ResetAuthorization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Tokens🌀AccessToken());
        }

        return $this->operator[Operator\Apps\ResetAuthorization::class]->call($clientId, $accessToken);
    }

    public function revokeAuthorizationForApplication(string $clientId, string $accessToken): ResponseInterface
    {
        if (array_key_exists(Operator\Apps\RevokeAuthorizationForApplication::class, $this->operator) === false) {
            $this->operator[Operator\Apps\RevokeAuthorizationForApplication::class] = new Operator\Apps\RevokeAuthorizationForApplication($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Tokens🌀AccessToken());
        }

        return $this->operator[Operator\Apps\RevokeAuthorizationForApplication::class]->call($clientId, $accessToken);
    }

    public function getBySlug(string $appSlug): Schema\Integration
    {
        if (array_key_exists(Operator\Apps\GetBySlug::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetBySlug::class] = new Operator\Apps\GetBySlug($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Apps🌀AppSlug());
        }

        return $this->operator[Operator\Apps\GetBySlug::class]->call($appSlug);
    }

    public function listReposAccessibleToInstallation(int $perPage, int $page): Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Apps\ListReposAccessibleToInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListReposAccessibleToInstallation::class] = new Operator\Apps\ListReposAccessibleToInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Installation🌀Repositories());
        }

        return $this->operator[Operator\Apps\ListReposAccessibleToInstallation::class]->call($perPage, $page);
    }

    public function revokeInstallationAccessToken(): ResponseInterface
    {
        if (array_key_exists(Operator\Apps\RevokeInstallationAccessToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\RevokeInstallationAccessToken::class] = new Operator\Apps\RevokeInstallationAccessToken($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Installation🌀Token());
        }

        return $this->operator[Operator\Apps\RevokeInstallationAccessToken::class]->call();
    }

    public function getOrgInstallation(string $org): Schema\Installation
    {
        if (array_key_exists(Operator\Apps\GetOrgInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetOrgInstallation::class] = new Operator\Apps\GetOrgInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installation());
        }

        return $this->operator[Operator\Apps\GetOrgInstallation::class]->call($org);
    }

    public function createContentAttachment(string $owner, string $repo, int $contentReferenceId, array $params): Schema\ContentReferenceAttachment
    {
        if (array_key_exists(Operator\Apps\CreateContentAttachment::class, $this->operator) === false) {
            $this->operator[Operator\Apps\CreateContentAttachment::class] = new Operator\Apps\CreateContentAttachment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀ContentReferences🌀ContentReferenceId🌀Attachments());
        }

        return $this->operator[Operator\Apps\CreateContentAttachment::class]->call($owner, $repo, $contentReferenceId, $params);
    }

    public function getRepoInstallation(string $owner, string $repo): Schema\Installation|Schema\BasicError
    {
        if (array_key_exists(Operator\Apps\GetRepoInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetRepoInstallation::class] = new Operator\Apps\GetRepoInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation());
        }

        return $this->operator[Operator\Apps\GetRepoInstallation::class]->call($owner, $repo);
    }

    public function listInstallationsForAuthenticatedUser(int $perPage, int $page): Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Apps\ListInstallationsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListInstallationsForAuthenticatedUser::class] = new Operator\Apps\ListInstallationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations());
        }

        return $this->operator[Operator\Apps\ListInstallationsForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listInstallationReposForAuthenticatedUser(int $installationId, int $perPage, int $page): Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Apps\ListInstallationReposForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListInstallationReposForAuthenticatedUser::class] = new Operator\Apps\ListInstallationReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories());
        }

        return $this->operator[Operator\Apps\ListInstallationReposForAuthenticatedUser::class]->call($installationId, $perPage, $page);
    }

    public function addRepoToInstallationForAuthenticatedUser(int $installationId, int $repositoryId): ResponseInterface
    {
        if (array_key_exists(Operator\Apps\AddRepoToInstallationForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Apps\AddRepoToInstallationForAuthenticatedUser::class] = new Operator\Apps\AddRepoToInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Apps\AddRepoToInstallationForAuthenticatedUser::class]->call($installationId, $repositoryId);
    }

    public function removeRepoFromInstallationForAuthenticatedUser(int $installationId, int $repositoryId): ResponseInterface
    {
        if (array_key_exists(Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser::class] = new Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser::class]->call($installationId, $repositoryId);
    }

    public function getUserInstallation(string $username): Schema\Installation
    {
        if (array_key_exists(Operator\Apps\GetUserInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetUserInstallation::class] = new Operator\Apps\GetUserInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Installation());
        }

        return $this->operator[Operator\Apps\GetUserInstallation::class]->call($username);
    }
}
