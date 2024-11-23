<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AdvancedSecurityActiveCommitters;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\BillingUsageReport;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAllCostCenters;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PackagesBillingUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Billing
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function getGithubActionsBillingGhe(array $params): ActionsBillingUsage
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\Billing\GetGithubActionsBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀Actions());

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function getGithubAdvancedSecurityBillingGhe(array $params): AdvancedSecurityActiveCommitters
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
        $operator = new Internal\Operator\Billing\GetGithubAdvancedSecurityBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀AdvancedSecurity());

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getAllCostCenters(array $params): GetAllCostCenters
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\Billing\GetAllCostCenters($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀CostCenters());

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function getGithubPackagesBillingGhe(array $params): PackagesBillingUsage
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\Billing\GetGithubPackagesBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀Packages());

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function getSharedStorageBillingGhe(array $params): CombinedBillingUsage
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\Billing\GetSharedStorageBillingGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀SharedStorage());

        return $operator->call($arguments['enterprise']);
    }

    /** @return */
    public function getGithubBillingUsageReportGhe(array $params): BillingUsageReport
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('year', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: year');
        }

        $arguments['year'] = $params['year'];
        unset($params['year']);
        if (array_key_exists('month', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: month');
        }

        $arguments['month'] = $params['month'];
        unset($params['month']);
        if (array_key_exists('day', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: day');
        }

        $arguments['day'] = $params['day'];
        unset($params['day']);
        if (array_key_exists('hour', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hour');
        }

        $arguments['hour'] = $params['hour'];
        unset($params['hour']);
        if (array_key_exists('cost_center_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cost_center_id');
        }

        $arguments['cost_center_id'] = $params['cost_center_id'];
        unset($params['cost_center_id']);
        $operator = new Internal\Operator\Billing\GetGithubBillingUsageReportGhe($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Settings🌀Billing🌀Usage());

        return $operator->call($arguments['enterprise'], $arguments['year'], $arguments['month'], $arguments['day'], $arguments['hour'], $arguments['cost_center_id']);
    }

    public function getGithubBillingUsageReportOrg(array $params): BillingUsageReport
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('year', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: year');
        }

        $arguments['year'] = $params['year'];
        unset($params['year']);
        if (array_key_exists('month', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: month');
        }

        $arguments['month'] = $params['month'];
        unset($params['month']);
        if (array_key_exists('day', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: day');
        }

        $arguments['day'] = $params['day'];
        unset($params['day']);
        if (array_key_exists('hour', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hour');
        }

        $arguments['hour'] = $params['hour'];
        unset($params['hour']);
        $operator = new Internal\Operator\Billing\GetGithubBillingUsageReportOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations🌀Org🌀Settings🌀Billing🌀Usage());

        return $operator->call($arguments['org'], $arguments['year'], $arguments['month'], $arguments['day'], $arguments['hour']);
    }

    /** @return */
    public function getGithubActionsBillingOrg(array $params): ActionsBillingUsage
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Billing\GetGithubActionsBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions());

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getGithubAdvancedSecurityBillingOrg(array $params): AdvancedSecurityActiveCommitters
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
        $operator = new Internal\Operator\Billing\GetGithubAdvancedSecurityBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀AdvancedSecurity());

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getGithubPackagesBillingOrg(array $params): PackagesBillingUsage
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Billing\GetGithubPackagesBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages());

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getSharedStorageBillingOrg(array $params): CombinedBillingUsage
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Billing\GetSharedStorageBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage());

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getGithubActionsBillingUser(array $params): ActionsBillingUsage
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\Billing\GetGithubActionsBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions());

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function getGithubPackagesBillingUser(array $params): PackagesBillingUsage
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\Billing\GetGithubPackagesBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages());

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function getSharedStorageBillingUser(array $params): CombinedBillingUsage
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\Billing\GetSharedStorageBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage());

        return $operator->call($arguments['username']);
    }
}
