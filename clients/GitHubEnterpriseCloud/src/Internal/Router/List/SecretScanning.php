<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\List;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class SecretScanning
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\SecretScanningBypassRequest> */
    public function listOrgBypassRequestsListing(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('repository_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_name');
        }

        $arguments['repository_name'] = $params['repository_name'];
        unset($params['repository_name']);
        if (array_key_exists('reviewer', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: reviewer');
        }

        $arguments['reviewer'] = $params['reviewer'];
        unset($params['reviewer']);
        if (array_key_exists('requester', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: requester');
        }

        $arguments['requester'] = $params['requester'];
        unset($params['requester']);
        if (array_key_exists('time_period', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: time_period');
        }

        $arguments['time_period'] = $params['time_period'];
        unset($params['time_period']);
        if (array_key_exists('request_status', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: request_status');
        }

        $arguments['request_status'] = $params['request_status'];
        unset($params['request_status']);
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
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\SecretScanning\ListOrgBypassRequestsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀BypassRequests🌀SecretScanning());
            $items    = [...$operator->call($arguments['org'], $arguments['repository_name'], $arguments['reviewer'], $arguments['requester'], $arguments['time_period'], $arguments['request_status'], $arguments['per_page'], $arguments['page'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForOrgListing(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('secret_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_type');
        }

        $arguments['secret_type'] = $params['secret_type'];
        unset($params['secret_type']);
        if (array_key_exists('resolution', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: resolution');
        }

        $arguments['resolution'] = $params['resolution'];
        unset($params['resolution']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('validity', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: validity');
        }

        $arguments['validity'] = $params['validity'];
        unset($params['validity']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('is_publicly_leaked', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: is_publicly_leaked');
        }

        $arguments['is_publicly_leaked'] = $params['is_publicly_leaked'];
        unset($params['is_publicly_leaked']);
        if (array_key_exists('is_multi_repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: is_multi_repo');
        }

        $arguments['is_multi_repo'] = $params['is_multi_repo'];
        unset($params['is_multi_repo']);
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\SecretScanning\ListAlertsForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecretScanning🌀Alerts());
            $items    = [...$operator->call($arguments['org'], $arguments['state'], $arguments['secret_type'], $arguments['resolution'], $arguments['before'], $arguments['after'], $arguments['validity'], $arguments['sort'], $arguments['direction'], $arguments['page'], $arguments['per_page'], $arguments['is_publicly_leaked'], $arguments['is_multi_repo'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\SecretScanningBypassRequest> */
    public function listRepoBypassRequestsListing(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('reviewer', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: reviewer');
        }

        $arguments['reviewer'] = $params['reviewer'];
        unset($params['reviewer']);
        if (array_key_exists('requester', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: requester');
        }

        $arguments['requester'] = $params['requester'];
        unset($params['requester']);
        if (array_key_exists('time_period', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: time_period');
        }

        $arguments['time_period'] = $params['time_period'];
        unset($params['time_period']);
        if (array_key_exists('request_status', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: request_status');
        }

        $arguments['request_status'] = $params['request_status'];
        unset($params['request_status']);
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
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\SecretScanning\ListRepoBypassRequestsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀BypassRequests🌀SecretScanning());
            $items    = [...$operator->call($arguments['owner'], $arguments['repo'], $arguments['reviewer'], $arguments['requester'], $arguments['time_period'], $arguments['request_status'], $arguments['per_page'], $arguments['page'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\SecretScanningAlert>|WithoutBody */
    public function listAlertsForRepoListing(array $params): iterable|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('secret_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_type');
        }

        $arguments['secret_type'] = $params['secret_type'];
        unset($params['secret_type']);
        if (array_key_exists('resolution', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: resolution');
        }

        $arguments['resolution'] = $params['resolution'];
        unset($params['resolution']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('validity', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: validity');
        }

        $arguments['validity'] = $params['validity'];
        unset($params['validity']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('is_publicly_leaked', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: is_publicly_leaked');
        }

        $arguments['is_publicly_leaked'] = $params['is_publicly_leaked'];
        unset($params['is_publicly_leaked']);
        if (array_key_exists('is_multi_repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: is_multi_repo');
        }

        $arguments['is_multi_repo'] = $params['is_multi_repo'];
        unset($params['is_multi_repo']);
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\SecretScanning\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts());
            $items    = [...$operator->call($arguments['owner'], $arguments['repo'], $arguments['state'], $arguments['secret_type'], $arguments['resolution'], $arguments['before'], $arguments['after'], $arguments['validity'], $arguments['sort'], $arguments['direction'], $arguments['page'], $arguments['per_page'], $arguments['is_publicly_leaked'], $arguments['is_multi_repo'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\SecretScanningLocation>|WithoutBody */
    public function listLocationsForAlertListing(array $params): iterable|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('alert_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: alert_number');
        }

        $arguments['alert_number'] = $params['alert_number'];
        unset($params['alert_number']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\SecretScanning\ListLocationsForAlertListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations());
            $items    = [...$operator->call($arguments['owner'], $arguments['repo'], $arguments['alert_number'], $arguments['page'], $arguments['per_page'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
