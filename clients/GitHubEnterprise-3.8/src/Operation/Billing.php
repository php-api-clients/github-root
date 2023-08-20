<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
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

    public function getGithubAdvancedSecurityBillingGhe(string $enterprise, int $perPage, int $page): Schema\AdvancedSecurityActiveCommitters
    {
        if (array_key_exists(Operator\Billing\GetGithubAdvancedSecurityBillingGhe::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubAdvancedSecurityBillingGhe::class] = new Operator\Billing\GetGithubAdvancedSecurityBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀AdvancedSecurity());
        }

        return $this->operator[Operator\Billing\GetGithubAdvancedSecurityBillingGhe::class]->call($enterprise, $perPage, $page);
    }

    public function getGithubAdvancedSecurityBillingOrg(string $org, int $perPage, int $page): Schema\AdvancedSecurityActiveCommitters
    {
        if (array_key_exists(Operator\Billing\GetGithubAdvancedSecurityBillingOrg::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubAdvancedSecurityBillingOrg::class] = new Operator\Billing\GetGithubAdvancedSecurityBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀AdvancedSecurity());
        }

        return $this->operator[Operator\Billing\GetGithubAdvancedSecurityBillingOrg::class]->call($org, $perPage, $page);
    }
}
