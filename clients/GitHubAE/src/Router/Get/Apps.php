<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Get;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\HookDelivery;
use ApiClients\Client\GitHubAE\Schema\Installation;
use ApiClients\Client\GitHubAE\Schema\Integration;
use ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubAE\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Apps
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Observable<Schema\IntegrationInstallationRequest> | array{code: int}) */
    public function listInstallationRequestsForAuthenticatedApp(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
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
        if (array_key_exists(Hydrator\Operation\App\InstallationRequests::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\InstallationRequests::class] = $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests();
        }

        $operator = new Operator\Apps\ListInstallationRequestsForAuthenticatedApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\InstallationRequests::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\Installation> */
    public function listInstallations(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('outdated', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: outdated');
        }

        $arguments['outdated'] = $params['outdated'];
        unset($params['outdated']);
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
        if (array_key_exists(Hydrator\Operation\App\Installations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Installations::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations();
        }

        $operator = new Operator\Apps\ListInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations::class]);

        return $operator->call($arguments['since'], $arguments['outdated'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getBySlug(array $params): Integration|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('app_slug', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: app_slug');
        }

        $arguments['app_slug'] = $params['app_slug'];
        unset($params['app_slug']);
        if (array_key_exists(Hydrator\Operation\Apps\AppSlug::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Apps\AppSlug::class] = $this->hydrators->getObjectMapperOperation🌀Apps🌀AppSlug();
        }

        $operator = new Operator\Apps\GetBySlug($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Apps\AppSlug::class]);

        return $operator->call($arguments['app_slug']);
    }

    /** @return (Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok | array{code: int}) */
    public function listReposAccessibleToInstallation(array $params): Ok|array
    {
        $matched   = true;
        $arguments = [];
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
        if (array_key_exists(Hydrator\Operation\Installation\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Installation\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Installation🌀Repositories();
        }

        $operator = new Operator\Apps\ListReposAccessibleToInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Installation\Repositories::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json | array{code: int}) */
    public function listInstallationsForAuthenticatedUser(array $params): Json|array
    {
        $matched   = true;
        $arguments = [];
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
        if (array_key_exists(Hydrator\Operation\User\Installations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Installations::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Installations();
        }

        $operator = new Operator\Apps\ListInstallationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Installations::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getWebhookConfigForApp(array $params): WebhookConfig|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\App\Hook\Config::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Hook\Config::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config();
        }

        $operator = new Operator\Apps\GetWebhookConfigForApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Hook\Config::class]);

        return $operator->call();
    }

    /** @return Observable<Schema\HookDeliveryItem> */
    public function listWebhookDeliveries(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('cursor', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cursor');
        }

        $arguments['cursor'] = $params['cursor'];
        unset($params['cursor']);
        if (array_key_exists('redelivery', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: redelivery');
        }

        $arguments['redelivery'] = $params['redelivery'];
        unset($params['redelivery']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\App\Hook\Deliveries::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Hook\Deliveries::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries();
        }

        $operator = new Operator\Apps\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Hook\Deliveries::class]);

        return $operator->call($arguments['cursor'], $arguments['redelivery'], $arguments['per_page']);
    }

    /** @return */
    public function getInstallation(array $params): Installation|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('installation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: installation_id');
        }

        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (array_key_exists(Hydrator\Operation\App\Installations\InstallationId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Installations\InstallationId::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId();
        }

        $operator = new Operator\Apps\GetInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations\InstallationId::class]);

        return $operator->call($arguments['installation_id']);
    }

    /** @return */
    public function getOrgInstallation(array $params): Installation|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Installation::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Installation::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installation();
        }

        $operator = new Operator\Apps\GetOrgInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Installation::class]);

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getUserInstallation(array $params): Installation|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Installation::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Installation::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Installation();
        }

        $operator = new Operator\Apps\GetUserInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Installation::class]);

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function getAuthenticated(array $params): Integration|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\App::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App::class] = $this->hydrators->getObjectMapperOperation🌀App();
        }

        $operator = new Operator\Apps\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App::class]);

        return $operator->call();
    }

    /** @return */
    public function getWebhookDelivery(array $params): HookDelivery|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('delivery_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: delivery_id');
        }

        $arguments['delivery_id'] = $params['delivery_id'];
        unset($params['delivery_id']);
        if (array_key_exists(Hydrator\Operation\App\Hook\Deliveries\DeliveryId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Hook\Deliveries\DeliveryId::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId();
        }

        $operator = new Operator\Apps\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Hook\Deliveries\DeliveryId::class]);

        return $operator->call($arguments['delivery_id']);
    }

    /** @return */
    public function getRepoInstallation(array $params): Installation|BasicError|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Installation::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Installation::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation();
        }

        $operator = new Operator\Apps\GetRepoInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Installation::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return (Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok | array{code: int}) */
    public function listInstallationReposForAuthenticatedUser(array $params): \ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('installation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: installation_id');
        }

        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
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
        if (array_key_exists(Hydrator\Operation\User\Installations\InstallationId\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Installations\InstallationId\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories();
        }

        $operator = new Operator\Apps\ListInstallationReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Installations\InstallationId\Repositories::class]);

        return $operator->call($arguments['installation_id'], $arguments['per_page'], $arguments['page']);
    }
}
