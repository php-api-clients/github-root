<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class Dependabot
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listOrgSecrets(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\ListOrgSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\ListOrgSecrets::class] = new Operator\Dependabot\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets());
        }

        return $this->operator[Operator\Dependabot\ListOrgSecrets::class]->call($org, $perPage, $page);
    }

    public function getOrgPublicKey(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\GetOrgPublicKey::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\GetOrgPublicKey::class] = new Operator\Dependabot\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Dependabot\GetOrgPublicKey::class]->call($org);
    }

    public function getOrgSecret(string $org, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\GetOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\GetOrgSecret::class] = new Operator\Dependabot\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\GetOrgSecret::class]->call($org, $secretName);
    }

    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\CreateOrUpdateOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\CreateOrUpdateOrgSecret::class] = new Operator\Dependabot\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\CreateOrUpdateOrgSecret::class]->call($org, $secretName, $params);
    }

    public function deleteOrgSecret(string $org, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\DeleteOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\DeleteOrgSecret::class] = new Operator\Dependabot\DeleteOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\DeleteOrgSecret::class]->call($org, $secretName);
    }

    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\ListSelectedReposForOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\ListSelectedReposForOrgSecret::class] = new Operator\Dependabot\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Dependabot\ListSelectedReposForOrgSecret::class]->call($org, $secretName, $page, $perPage);
    }

    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\SetSelectedReposForOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\SetSelectedReposForOrgSecret::class] = new Operator\Dependabot\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Dependabot\SetSelectedReposForOrgSecret::class]->call($org, $secretName, $params);
    }

    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\AddSelectedRepoToOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\AddSelectedRepoToOrgSecret::class] = new Operator\Dependabot\AddSelectedRepoToOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Dependabot\AddSelectedRepoToOrgSecret::class]->call($org, $secretName, $repositoryId);
    }

    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\RemoveSelectedRepoFromOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\RemoveSelectedRepoFromOrgSecret::class] = new Operator\Dependabot\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Dependabot\RemoveSelectedRepoFromOrgSecret::class]->call($org, $secretName, $repositoryId);
    }

    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\ListRepoSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\ListRepoSecrets::class] = new Operator\Dependabot\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets());
        }

        return $this->operator[Operator\Dependabot\ListRepoSecrets::class]->call($owner, $repo, $perPage, $page);
    }

    public function getRepoPublicKey(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\GetRepoPublicKey::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\GetRepoPublicKey::class] = new Operator\Dependabot\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Dependabot\GetRepoPublicKey::class]->call($owner, $repo);
    }

    public function getRepoSecret(string $owner, string $repo, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\GetRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\GetRepoSecret::class] = new Operator\Dependabot\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\GetRepoSecret::class]->call($owner, $repo, $secretName);
    }

    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\CreateOrUpdateRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\CreateOrUpdateRepoSecret::class] = new Operator\Dependabot\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\CreateOrUpdateRepoSecret::class]->call($owner, $repo, $secretName, $params);
    }

    public function deleteRepoSecret(string $owner, string $repo, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Dependabot\DeleteRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\DeleteRepoSecret::class] = new Operator\Dependabot\DeleteRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\DeleteRepoSecret::class]->call($owner, $repo, $secretName);
    }
}
