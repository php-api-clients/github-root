<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\List;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class SecretScanning
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\SecretScanningAlert> | array{code: int}) */
    public function listAlertsForRepoListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\SecretScanning\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['state'], $arguments['secret_type'], $arguments['resolution'], $arguments['page'], $arguments['per_page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (iterable<Schema\SecretScanningLocation> | array{code: int}) */
    public function listLocationsForAlertListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\SecretScanning\ListLocationsForAlertListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['alert_number'], $arguments['page'], $arguments['per_page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
