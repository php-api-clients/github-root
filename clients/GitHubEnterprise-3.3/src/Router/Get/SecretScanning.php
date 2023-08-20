<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\SecretScanningAlert;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class SecretScanning
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\SecretScanningAlert> | array{code: int}) */
    public function listAlertsForRepo(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts();
        }

        $operator = new Operator\SecretScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['state'], $arguments['secret_type'], $arguments['resolution'], $arguments['page'], $arguments['per_page']);
    }

    /** @return iterable<Schema\OrganizationSecretScanningAlert> */
    public function listAlertsForOrg(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\SecretScanning\Alerts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\SecretScanning\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecretScanning🌀Alerts();
        }

        $operator = new Operator\SecretScanning\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\SecretScanning\Alerts::class]);

        return $operator->call($arguments['org'], $arguments['state'], $arguments['secret_type'], $arguments['resolution'], $arguments['page'], $arguments['per_page']);
    }

    /** @return (Schema\SecretScanningAlert | array{code: int}) */
    public function getAlert(array $params): SecretScanningAlert|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber();
        }

        $operator = new Operator\SecretScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['alert_number']);
    }

    /** @return (iterable<Schema\SecretScanningLocation> | array{code: int}) */
    public function listLocationsForAlert(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations();
        }

        $operator = new Operator\SecretScanning\ListLocationsForAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['alert_number'], $arguments['page'], $arguments['per_page']);
    }
}
