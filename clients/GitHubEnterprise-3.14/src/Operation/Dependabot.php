<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\DependabotAlert;
use ApiClients\Client\GitHubEnterprise\Schema\DependabotPublicKey;
use ApiClients\Client\GitHubEnterprise\Schema\DependabotSecret;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationDependabotSecret;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Dependabot
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\DependabotAlertWithRepository>|WithoutBody */
    public function listAlertsForEnterprise(string $enterprise, string $state, string $severity, string $ecosystem, string $package, string $scope, string $before, string $after, int $last, string $sort, string $direction, int $first, int $perPage): iterable|WithoutBody
    {
        return $this->operators->dependabot👷ListAlertsForEnterprise()->call($enterprise, $state, $severity, $ecosystem, $package, $scope, $before, $after, $last, $sort, $direction, $first, $perPage);
    }

    /** @return Observable<Schema\DependabotAlertWithRepository>|WithoutBody */
    public function listAlertsForOrg(string $org, string $state, string $severity, string $ecosystem, string $package, string $scope, string $before, string $after, int $last, string $sort, string $direction, int $first, int $perPage): iterable|WithoutBody
    {
        return $this->operators->dependabot👷ListAlertsForOrg()->call($org, $state, $severity, $ecosystem, $package, $scope, $before, $after, $last, $sort, $direction, $first, $perPage);
    }

    /** @return */
    public function listOrgSecrets(string $org, int $perPage, int $page): Ok
    {
        return $this->operators->dependabot👷ListOrgSecrets()->call($org, $perPage, $page);
    }

    /** @return */
    public function getOrgPublicKey(string $org): DependabotPublicKey
    {
        return $this->operators->dependabot👷GetOrgPublicKey()->call($org);
    }

    /** @return */
    public function getOrgSecret(string $org, string $secretName): OrganizationDependabotSecret
    {
        return $this->operators->dependabot👷GetOrgSecret()->call($org, $secretName);
    }

    /** @return */
    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): EmptyObject|WithoutBody
    {
        return $this->operators->dependabot👷CreateOrUpdateOrgSecret()->call($org, $secretName, $params);
    }

    /** @return */
    public function deleteOrgSecret(string $org, string $secretName): WithoutBody
    {
        return $this->operators->dependabot👷DeleteOrgSecret()->call($org, $secretName);
    }

    /** @return */
    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): Json
    {
        return $this->operators->dependabot👷ListSelectedReposForOrgSecret()->call($org, $secretName, $page, $perPage);
    }

    /** @return */
    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): WithoutBody
    {
        return $this->operators->dependabot👷SetSelectedReposForOrgSecret()->call($org, $secretName, $params);
    }

    /** @return */
    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): WithoutBody
    {
        return $this->operators->dependabot👷AddSelectedRepoToOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return */
    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): WithoutBody
    {
        return $this->operators->dependabot👷RemoveSelectedRepoFromOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return Observable<Schema\DependabotAlert>|WithoutBody */
    public function listAlertsForRepo(string $owner, string $repo, string $state, string $severity, string $ecosystem, string $package, string $manifest, string $scope, string $sort, string $direction): iterable|WithoutBody
    {
        return $this->operators->dependabot👷ListAlertsForRepo()->call($owner, $repo, $state, $severity, $ecosystem, $package, $manifest, $scope, $sort, $direction);
    }

    /** @return */
    public function getAlert(string $owner, string $repo, int $alertNumber): DependabotAlert|WithoutBody
    {
        return $this->operators->dependabot👷GetAlert()->call($owner, $repo, $alertNumber);
    }

    /** @return */
    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): DependabotAlert
    {
        return $this->operators->dependabot👷UpdateAlert()->call($owner, $repo, $alertNumber, $params);
    }

    /** @return */
    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok
    {
        return $this->operators->dependabot👷ListRepoSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getRepoPublicKey(string $owner, string $repo): DependabotPublicKey
    {
        return $this->operators->dependabot👷GetRepoPublicKey()->call($owner, $repo);
    }

    /** @return */
    public function getRepoSecret(string $owner, string $repo, string $secretName): DependabotSecret
    {
        return $this->operators->dependabot👷GetRepoSecret()->call($owner, $repo, $secretName);
    }

    /** @return */
    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): EmptyObject|WithoutBody
    {
        return $this->operators->dependabot👷CreateOrUpdateRepoSecret()->call($owner, $repo, $secretName, $params);
    }

    /** @return */
    public function deleteRepoSecret(string $owner, string $repo, string $secretName): WithoutBody
    {
        return $this->operators->dependabot👷DeleteRepoSecret()->call($owner, $repo, $secretName);
    }
}
