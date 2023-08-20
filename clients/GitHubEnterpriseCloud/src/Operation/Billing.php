<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrators;
use ApiClients\Client\GitHubEnterpriseCloud\Operator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Billing
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getGithubActionsBillingGhe(string $enterprise): Schema\ActionsBillingUsage
    {
        if (array_key_exists(Operator\Billing\GetGithubActionsBillingGhe::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubActionsBillingGhe::class] = new Operator\Billing\GetGithubActionsBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀Actions());
        }

        return $this->operator[Operator\Billing\GetGithubActionsBillingGhe::class]->call($enterprise);
    }

    public function getGithubAdvancedSecurityBillingGhe(string $enterprise, int $perPage, int $page): Schema\AdvancedSecurityActiveCommitters
    {
        if (array_key_exists(Operator\Billing\GetGithubAdvancedSecurityBillingGhe::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubAdvancedSecurityBillingGhe::class] = new Operator\Billing\GetGithubAdvancedSecurityBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀AdvancedSecurity());
        }

        return $this->operator[Operator\Billing\GetGithubAdvancedSecurityBillingGhe::class]->call($enterprise, $perPage, $page);
    }

    public function getGithubPackagesBillingGhe(string $enterprise): Schema\PackagesBillingUsage
    {
        if (array_key_exists(Operator\Billing\GetGithubPackagesBillingGhe::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubPackagesBillingGhe::class] = new Operator\Billing\GetGithubPackagesBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀Packages());
        }

        return $this->operator[Operator\Billing\GetGithubPackagesBillingGhe::class]->call($enterprise);
    }

    public function getSharedStorageBillingGhe(string $enterprise): Schema\CombinedBillingUsage
    {
        if (array_key_exists(Operator\Billing\GetSharedStorageBillingGhe::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetSharedStorageBillingGhe::class] = new Operator\Billing\GetSharedStorageBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀SharedStorage());
        }

        return $this->operator[Operator\Billing\GetSharedStorageBillingGhe::class]->call($enterprise);
    }

    public function getGithubActionsBillingOrg(string $org): Schema\ActionsBillingUsage
    {
        if (array_key_exists(Operator\Billing\GetGithubActionsBillingOrg::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubActionsBillingOrg::class] = new Operator\Billing\GetGithubActionsBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions());
        }

        return $this->operator[Operator\Billing\GetGithubActionsBillingOrg::class]->call($org);
    }

    public function getGithubAdvancedSecurityBillingOrg(string $org, int $perPage, int $page): Schema\AdvancedSecurityActiveCommitters
    {
        if (array_key_exists(Operator\Billing\GetGithubAdvancedSecurityBillingOrg::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubAdvancedSecurityBillingOrg::class] = new Operator\Billing\GetGithubAdvancedSecurityBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀AdvancedSecurity());
        }

        return $this->operator[Operator\Billing\GetGithubAdvancedSecurityBillingOrg::class]->call($org, $perPage, $page);
    }

    public function getGithubPackagesBillingOrg(string $org): Schema\PackagesBillingUsage
    {
        if (array_key_exists(Operator\Billing\GetGithubPackagesBillingOrg::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubPackagesBillingOrg::class] = new Operator\Billing\GetGithubPackagesBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages());
        }

        return $this->operator[Operator\Billing\GetGithubPackagesBillingOrg::class]->call($org);
    }

    public function getSharedStorageBillingOrg(string $org): Schema\CombinedBillingUsage
    {
        if (array_key_exists(Operator\Billing\GetSharedStorageBillingOrg::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetSharedStorageBillingOrg::class] = new Operator\Billing\GetSharedStorageBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage());
        }

        return $this->operator[Operator\Billing\GetSharedStorageBillingOrg::class]->call($org);
    }

    public function getGithubActionsBillingUser(string $username): Schema\ActionsBillingUsage
    {
        if (array_key_exists(Operator\Billing\GetGithubActionsBillingUser::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubActionsBillingUser::class] = new Operator\Billing\GetGithubActionsBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions());
        }

        return $this->operator[Operator\Billing\GetGithubActionsBillingUser::class]->call($username);
    }

    public function getGithubPackagesBillingUser(string $username): Schema\PackagesBillingUsage
    {
        if (array_key_exists(Operator\Billing\GetGithubPackagesBillingUser::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubPackagesBillingUser::class] = new Operator\Billing\GetGithubPackagesBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages());
        }

        return $this->operator[Operator\Billing\GetGithubPackagesBillingUser::class]->call($username);
    }

    public function getSharedStorageBillingUser(string $username): Schema\CombinedBillingUsage
    {
        if (array_key_exists(Operator\Billing\GetSharedStorageBillingUser::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetSharedStorageBillingUser::class] = new Operator\Billing\GetSharedStorageBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage());
        }

        return $this->operator[Operator\Billing\GetSharedStorageBillingUser::class]->call($username);
    }
}
