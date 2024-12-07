<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetGithubActionsBillingOrg;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetGithubActionsBillingUser;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetGithubBillingUsageReportOrg;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetGithubPackagesBillingOrg;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetGithubPackagesBillingUser;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetSharedStorageBillingOrg;
use ApiClients\Client\GitHub\Internal\Operator\Billing\GetSharedStorageBillingUser;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHub\Schema\BillingUsageReport;
use ApiClients\Client\GitHub\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHub\Schema\PackagesBillingUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Billing
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
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
        $operator = new GetGithubBillingUsageReportOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations🌀Org🌀Settings🌀Billing🌀Usage());

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
        $operator = new GetGithubActionsBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions());

        return $operator->call($arguments['org']);
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
        $operator = new GetGithubPackagesBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages());

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
        $operator = new GetSharedStorageBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage());

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
        $operator = new GetGithubActionsBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions());

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
        $operator = new GetGithubPackagesBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages());

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
        $operator = new GetSharedStorageBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage());

        return $operator->call($arguments['username']);
    }
}
