<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrators;
use ApiClients\Client\GitHubEnterpriseCloud\Operator;
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
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function getGithubActionsBillingGhe(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\Actions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\Actions::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀Actions();
        }

        $operator = new Operator\Billing\GetGithubActionsBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\Actions::class]);

        return $operator->call($arguments['enterprise']);
    }

    public function getGithubAdvancedSecurityBillingGhe(array $params)
    {
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

    public function getGithubPackagesBillingGhe(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\Packages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀Packages();
        }

        $operator = new Operator\Billing\GetGithubPackagesBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\Packages::class]);

        return $operator->call($arguments['enterprise']);
    }

    public function getSharedStorageBillingGhe(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\SharedStorage::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\SharedStorage::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀SharedStorage();
        }

        $operator = new Operator\Billing\GetSharedStorageBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Settings\Billing\SharedStorage::class]);

        return $operator->call($arguments['enterprise']);
    }

    public function getGithubActionsBillingOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Settings\Billing\Actions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\Actions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions();
        }

        $operator = new Operator\Billing\GetGithubActionsBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\Actions::class]);

        return $operator->call($arguments['org']);
    }

    public function getGithubAdvancedSecurityBillingOrg(array $params)
    {
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

    public function getGithubPackagesBillingOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Settings\Billing\Packages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages();
        }

        $operator = new Operator\Billing\GetGithubPackagesBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\Packages::class]);

        return $operator->call($arguments['org']);
    }

    public function getSharedStorageBillingOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage();
        }

        $operator = new Operator\Billing\GetSharedStorageBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage::class]);

        return $operator->call($arguments['org']);
    }

    public function getGithubActionsBillingUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Settings\Billing\Actions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\Actions::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions();
        }

        $operator = new Operator\Billing\GetGithubActionsBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\Actions::class]);

        return $operator->call($arguments['username']);
    }

    public function getGithubPackagesBillingUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Settings\Billing\Packages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages();
        }

        $operator = new Operator\Billing\GetGithubPackagesBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\Packages::class]);

        return $operator->call($arguments['username']);
    }

    public function getSharedStorageBillingUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage();
        }

        $operator = new Operator\Billing\GetSharedStorageBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage::class]);

        return $operator->call($arguments['username']);
    }
}
