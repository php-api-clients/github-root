<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Operators;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\ContentReferenceAttachment;
use ApiClients\Client\GitHubEnterprise\Schema\HookDelivery;
use ApiClients\Client\GitHubEnterprise\Schema\Installation;
use ApiClients\Client\GitHubEnterprise\Schema\InstallationToken;
use ApiClients\Client\GitHubEnterprise\Schema\Integration;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubEnterprise\Schema\WebhookConfig;

final class Apps
{
    public function __construct(private Operators $operators)
    {
    }

    /** @return */
    public function getAuthenticated(): Integration|array
    {
        return $this->operators->apps👷GetAuthenticated()->call();
    }

    /** @return */
    public function createFromManifest(string $code): Integration|array
    {
        return $this->operators->apps👷CreateFromManifest()->call($code);
    }

    /** @return */
    public function getWebhookConfigForApp(): WebhookConfig|array
    {
        return $this->operators->apps👷GetWebhookConfigForApp()->call();
    }

    /** @return */
    public function updateWebhookConfigForApp(array $params): WebhookConfig|array
    {
        return $this->operators->apps👷UpdateWebhookConfigForApp()->call($params);
    }

    /** @return iterable<Schema\HookDeliveryItem> */
    public function listWebhookDeliveries(string $cursor, int $perPage): iterable
    {
        return $this->operators->apps👷ListWebhookDeliveries()->call($cursor, $perPage);
    }

    /** @return */
    public function getWebhookDelivery(int $deliveryId): HookDelivery|array
    {
        return $this->operators->apps👷GetWebhookDelivery()->call($deliveryId);
    }

    /** @return */
    public function redeliverWebhookDelivery(int $deliveryId): Accepted|array
    {
        return $this->operators->apps👷RedeliverWebhookDelivery()->call($deliveryId);
    }

    /** @return iterable<Schema\Installation> */
    public function listInstallations(string $since, string $outdated, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListInstallations()->call($since, $outdated, $perPage, $page);
    }

    /** @return iterable<Schema\Installation> */
    public function listInstallationsListing(string $since, string $outdated, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListInstallationsListing()->call($since, $outdated, $perPage, $page);
    }

    /** @return */
    public function getInstallation(int $installationId): Installation|array
    {
        return $this->operators->apps👷GetInstallation()->call($installationId);
    }

    /** @return array{code:int} */
    public function deleteInstallation(int $installationId): array
    {
        return $this->operators->apps👷DeleteInstallation()->call($installationId);
    }

    /** @return */
    public function createInstallationAccessToken(int $installationId, array $params): InstallationToken|array
    {
        return $this->operators->apps👷CreateInstallationAccessToken()->call($installationId, $params);
    }

    /** @return array{code:int} */
    public function suspendInstallation(int $installationId): array
    {
        return $this->operators->apps👷SuspendInstallation()->call($installationId);
    }

    /** @return array{code:int} */
    public function unsuspendInstallation(int $installationId): array
    {
        return $this->operators->apps👷UnsuspendInstallation()->call($installationId);
    }

    /** @return array{code:int} */
    public function deleteAuthorization(string $clientId, array $params): array
    {
        return $this->operators->apps👷DeleteAuthorization()->call($clientId, $params);
    }

    /** @return array{code:int} */
    public function revokeGrantForApplication(string $clientId, string $accessToken): array
    {
        return $this->operators->apps👷RevokeGrantForApplication()->call($clientId, $accessToken);
    }

    /** @return */
    public function checkToken(string $clientId, array $params): Authorization|array
    {
        return $this->operators->apps👷CheckToken()->call($clientId, $params);
    }

    /** @return array{code:int} */
    public function deleteToken(string $clientId, array $params): array
    {
        return $this->operators->apps👷DeleteToken()->call($clientId, $params);
    }

    /** @return */
    public function resetToken(string $clientId, array $params): Authorization|array
    {
        return $this->operators->apps👷ResetToken()->call($clientId, $params);
    }

    /** @return */
    public function scopeToken(string $clientId, array $params): Authorization|array
    {
        return $this->operators->apps👷ScopeToken()->call($clientId, $params);
    }

    /** @return */
    public function checkAuthorization(string $clientId, string $accessToken): Authorization|array
    {
        return $this->operators->apps👷CheckAuthorization()->call($clientId, $accessToken);
    }

    /** @return */
    public function resetAuthorization(string $clientId, string $accessToken): Authorization|array
    {
        return $this->operators->apps👷ResetAuthorization()->call($clientId, $accessToken);
    }

    /** @return array{code:int} */
    public function revokeAuthorizationForApplication(string $clientId, string $accessToken): array
    {
        return $this->operators->apps👷RevokeAuthorizationForApplication()->call($clientId, $accessToken);
    }

    /** @return */
    public function getBySlug(string $appSlug): Integration|array
    {
        return $this->operators->apps👷GetBySlug()->call($appSlug);
    }

    /** @return Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|array{code:int} */
    public function listReposAccessibleToInstallation(int $perPage, int $page): Ok|array
    {
        return $this->operators->apps👷ListReposAccessibleToInstallation()->call($perPage, $page);
    }

    /** @return array{code:int} */
    public function revokeInstallationAccessToken(): array
    {
        return $this->operators->apps👷RevokeInstallationAccessToken()->call();
    }

    /** @return */
    public function getOrgInstallation(string $org): Installation|array
    {
        return $this->operators->apps👷GetOrgInstallation()->call($org);
    }

    /** @return Schema\ContentReferenceAttachment|array{code:int} */
    public function createContentAttachment(string $owner, string $repo, int $contentReferenceId, array $params): ContentReferenceAttachment|array
    {
        return $this->operators->apps👷CreateContentAttachment()->call($owner, $repo, $contentReferenceId, $params);
    }

    /** @return */
    public function getRepoInstallation(string $owner, string $repo): Installation|BasicError|array
    {
        return $this->operators->apps👷GetRepoInstallation()->call($owner, $repo);
    }

    /** @return Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function listInstallationsForAuthenticatedUser(int $perPage, int $page): Json|array
    {
        return $this->operators->apps👷ListInstallationsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|array{code:int} */
    public function listInstallationReposForAuthenticatedUser(int $installationId, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|array
    {
        return $this->operators->apps👷ListInstallationReposForAuthenticatedUser()->call($installationId, $perPage, $page);
    }

    /** @return array{code:int} */
    public function addRepoToInstallationForAuthenticatedUser(int $installationId, int $repositoryId): array
    {
        return $this->operators->apps👷AddRepoToInstallationForAuthenticatedUser()->call($installationId, $repositoryId);
    }

    /** @return array{code:int} */
    public function removeRepoFromInstallationForAuthenticatedUser(int $installationId, int $repositoryId): array
    {
        return $this->operators->apps👷RemoveRepoFromInstallationForAuthenticatedUser()->call($installationId, $repositoryId);
    }

    /** @return */
    public function getUserInstallation(string $username): Installation|array
    {
        return $this->operators->apps👷GetUserInstallation()->call($username);
    }
}
