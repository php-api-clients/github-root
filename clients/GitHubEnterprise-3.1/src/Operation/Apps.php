<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\ContentReferenceAttachment;
use ApiClients\Client\GitHubEnterprise\Schema\Installation;
use ApiClients\Client\GitHubEnterprise\Schema\InstallationToken;
use ApiClients\Client\GitHubEnterprise\Schema\Integration;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Apps
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getAuthenticated(): Integration
    {
        return $this->operators->apps👷GetAuthenticated()->call();
    }

    /** @return */
    public function createFromManifest(string $code): Integration
    {
        return $this->operators->apps👷CreateFromManifest()->call($code);
    }

    /** @return */
    public function getWebhookConfigForApp(): WebhookConfig
    {
        return $this->operators->apps👷GetWebhookConfigForApp()->call();
    }

    /** @return */
    public function updateWebhookConfigForApp(array $params): WebhookConfig
    {
        return $this->operators->apps👷UpdateWebhookConfigForApp()->call($params);
    }

    /** @return Observable<Schema\Installation> */
    public function listInstallations(string $since, string $outdated, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListInstallations()->call($since, $outdated, $perPage, $page);
    }

    /** @return Observable<Schema\Installation> */
    public function listInstallationsListing(string $since, string $outdated, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListInstallationsListing()->call($since, $outdated, $perPage, $page);
    }

    /** @return */
    public function getInstallation(int $installationId): Installation
    {
        return $this->operators->apps👷GetInstallation()->call($installationId);
    }

    /** @return */
    public function deleteInstallation(int $installationId): WithoutBody
    {
        return $this->operators->apps👷DeleteInstallation()->call($installationId);
    }

    /** @return */
    public function createInstallationAccessToken(int $installationId, array $params): InstallationToken
    {
        return $this->operators->apps👷CreateInstallationAccessToken()->call($installationId, $params);
    }

    /** @return */
    public function suspendInstallation(int $installationId): WithoutBody
    {
        return $this->operators->apps👷SuspendInstallation()->call($installationId);
    }

    /** @return */
    public function unsuspendInstallation(int $installationId): WithoutBody
    {
        return $this->operators->apps👷UnsuspendInstallation()->call($installationId);
    }

    /** @return */
    public function deleteAuthorization(string $clientId, array $params): WithoutBody
    {
        return $this->operators->apps👷DeleteAuthorization()->call($clientId, $params);
    }

    /** @return */
    public function revokeGrantForApplication(string $clientId, string $accessToken): WithoutBody
    {
        return $this->operators->apps👷RevokeGrantForApplication()->call($clientId, $accessToken);
    }

    /** @return */
    public function checkToken(string $clientId, array $params): Authorization
    {
        return $this->operators->apps👷CheckToken()->call($clientId, $params);
    }

    /** @return */
    public function deleteToken(string $clientId, array $params): WithoutBody
    {
        return $this->operators->apps👷DeleteToken()->call($clientId, $params);
    }

    /** @return */
    public function resetToken(string $clientId, array $params): Authorization
    {
        return $this->operators->apps👷ResetToken()->call($clientId, $params);
    }

    /** @return */
    public function scopeToken(string $clientId, array $params): Authorization
    {
        return $this->operators->apps👷ScopeToken()->call($clientId, $params);
    }

    /** @return */
    public function checkAuthorization(string $clientId, string $accessToken): Authorization
    {
        return $this->operators->apps👷CheckAuthorization()->call($clientId, $accessToken);
    }

    /** @return */
    public function resetAuthorization(string $clientId, string $accessToken): Authorization
    {
        return $this->operators->apps👷ResetAuthorization()->call($clientId, $accessToken);
    }

    /** @return */
    public function revokeAuthorizationForApplication(string $clientId, string $accessToken): WithoutBody
    {
        return $this->operators->apps👷RevokeAuthorizationForApplication()->call($clientId, $accessToken);
    }

    /** @return */
    public function getBySlug(string $appSlug): Integration
    {
        return $this->operators->apps👷GetBySlug()->call($appSlug);
    }

    /** @return */
    public function listReposAccessibleToInstallation(int $perPage, int $page): Ok|WithoutBody
    {
        return $this->operators->apps👷ListReposAccessibleToInstallation()->call($perPage, $page);
    }

    /** @return */
    public function revokeInstallationAccessToken(): WithoutBody
    {
        return $this->operators->apps👷RevokeInstallationAccessToken()->call();
    }

    /** @return */
    public function getOrgInstallation(string $org): Installation
    {
        return $this->operators->apps👷GetOrgInstallation()->call($org);
    }

    /** @return */
    public function createContentAttachment(string $owner, string $repo, int $contentReferenceId, array $params): ContentReferenceAttachment|WithoutBody
    {
        return $this->operators->apps👷CreateContentAttachment()->call($owner, $repo, $contentReferenceId, $params);
    }

    /** @return */
    public function getRepoInstallation(string $owner, string $repo): Installation|BasicError
    {
        return $this->operators->apps👷GetRepoInstallation()->call($owner, $repo);
    }

    /** @return */
    public function listInstallationsForAuthenticatedUser(int $perPage, int $page): Json|WithoutBody
    {
        return $this->operators->apps👷ListInstallationsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return */
    public function listInstallationReposForAuthenticatedUser(int $installationId, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->apps👷ListInstallationReposForAuthenticatedUser()->call($installationId, $perPage, $page);
    }

    /** @return */
    public function addRepoToInstallationForAuthenticatedUser(int $installationId, int $repositoryId): WithoutBody
    {
        return $this->operators->apps👷AddRepoToInstallationForAuthenticatedUser()->call($installationId, $repositoryId);
    }

    /** @return */
    public function removeRepoFromInstallationForAuthenticatedUser(int $installationId, int $repositoryId): WithoutBody
    {
        return $this->operators->apps👷RemoveRepoFromInstallationForAuthenticatedUser()->call($installationId, $repositoryId);
    }

    /** @return */
    public function getUserInstallation(string $username): Installation
    {
        return $this->operators->apps👷GetUserInstallation()->call($username);
    }
}
