<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Billing
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function getGithubAdvancedSecurityBillingGhe(array $params): AdvancedSecurityActiveCommitters|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\AdvancedSecurity::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\AdvancedSecurity::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀AdvancedSecurity();
        }

        $operator = new Operator\Billing\GetGithubAdvancedSecurityBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\AdvancedSecurity::class]);

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getGithubAdvancedSecurityBillingOrg(array $params): AdvancedSecurityActiveCommitters|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Settings\Billing\AdvancedSecurity::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\AdvancedSecurity::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀AdvancedSecurity();
        }

        $operator = new Operator\Billing\GetGithubAdvancedSecurityBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\AdvancedSecurity::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }
}
