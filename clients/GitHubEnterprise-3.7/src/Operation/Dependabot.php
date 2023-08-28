<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\DependabotPublicKey;
use ApiClients\Client\GitHubEnterprise\Schema\DependabotSecret;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationDependabotSecret;

final class Dependabot
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok */
    public function listOrgSecrets(string $org, int $perPage, int $page): Ok|array
    {
        return $this->operators->dependabot👷ListOrgSecrets()->call($org, $perPage, $page);
    }

    /** @return Schema\DependabotPublicKey */
    public function getOrgPublicKey(string $org): DependabotPublicKey|array
    {
        return $this->operators->dependabot👷GetOrgPublicKey()->call($org);
    }

    /** @return Schema\OrganizationDependabotSecret */
    public function getOrgSecret(string $org, string $secretName): OrganizationDependabotSecret|array
    {
        return $this->operators->dependabot👷GetOrgSecret()->call($org, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->dependabot👷CreateOrUpdateOrgSecret()->call($org, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteOrgSecret(string $org, string $secretName): array
    {
        return $this->operators->dependabot👷DeleteOrgSecret()->call($org, $secretName);
    }

    /** @return Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json */
    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): Json|array
    {
        return $this->operators->dependabot👷ListSelectedReposForOrgSecret()->call($org, $secretName, $page, $perPage);
    }

    /** @return array{code:int} */
    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): array
    {
        return $this->operators->dependabot👷SetSelectedReposForOrgSecret()->call($org, $secretName, $params);
    }

    /** @return array{code:int} */
    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): array
    {
        return $this->operators->dependabot👷AddSelectedRepoToOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return array{code:int} */
    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): array
    {
        return $this->operators->dependabot👷RemoveSelectedRepoFromOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok */
    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok|array
    {
        return $this->operators->dependabot👷ListRepoSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\DependabotPublicKey */
    public function getRepoPublicKey(string $owner, string $repo): DependabotPublicKey|array
    {
        return $this->operators->dependabot👷GetRepoPublicKey()->call($owner, $repo);
    }

    /** @return Schema\DependabotSecret */
    public function getRepoSecret(string $owner, string $repo, string $secretName): DependabotSecret|array
    {
        return $this->operators->dependabot👷GetRepoSecret()->call($owner, $repo, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->dependabot👷CreateOrUpdateRepoSecret()->call($owner, $repo, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteRepoSecret(string $owner, string $repo, string $secretName): array
    {
        return $this->operators->dependabot👷DeleteRepoSecret()->call($owner, $repo, $secretName);
    }
}
