<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetAuthenticated;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetBySlug;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetOrgInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetRepoInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetSubscriptionPlanForAccount;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetSubscriptionPlanForAccountStubbed;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetUserInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetWebhookConfigForApp;
use ApiClients\Client\GitHub\Internal\Operator\Apps\GetWebhookDelivery;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListAccountsForPlan;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListAccountsForPlanStubbed;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListInstallationReposForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedApp;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListInstallations;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListInstallationsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListPlans;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListPlansStubbed;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListReposAccessibleToInstallation;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed;
use ApiClients\Client\GitHub\Internal\Operator\Apps\ListWebhookDeliveries;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Client\GitHub\Schema\Installation;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\MarketplacePurchase;
use ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Apps
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function getAuthenticated(array $params): Integration
    {
        $operator = new GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App());

        return $operator->call();
    }

    /** @return Observable<IntegrationInstallationRequest>|WithoutBody */
    public function listInstallationRequestsForAuthenticatedApp(array $params): iterable|WithoutBody
    {
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
        $operator = new ListInstallationRequestsForAuthenticatedApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Installation> */
    public function listInstallations(array $params): iterable
    {
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
        $operator = new ListInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations());

        return $operator->call($arguments['since'], $arguments['outdated'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getBySlug(array $params): Integration
    {
        $arguments = [];
        if (array_key_exists('app_slug', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: app_slug');
        }

        $arguments['app_slug'] = $params['app_slug'];
        unset($params['app_slug']);
        $operator = new GetBySlug($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Apps🌀AppSlug());

        return $operator->call($arguments['app_slug']);
    }

    /** @return */
    public function listReposAccessibleToInstallation(array $params): Ok|WithoutBody
    {
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
        $operator = new ListReposAccessibleToInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Installation🌀Repositories());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<MarketplaceListingPlan> */
    public function listPlans(array $params): iterable
    {
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
        $operator = new ListPlans($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listInstallationsForAuthenticatedUser(array $params): Json|WithoutBody
    {
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
        $operator = new ListInstallationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<UserMarketplacePurchase>|WithoutBody */
    public function listSubscriptionsForAuthenticatedUser(array $params): iterable|WithoutBody
    {
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
        $operator = new ListSubscriptionsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getWebhookConfigForApp(array $params): WebhookConfig
    {
        $operator = new GetWebhookConfigForApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());

        return $operator->call();
    }

    /** @return Observable<HookDeliveryItem> */
    public function listWebhookDeliveries(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('cursor', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cursor');
        }

        $arguments['cursor'] = $params['cursor'];
        unset($params['cursor']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries());

        return $operator->call($arguments['cursor'], $arguments['per_page']);
    }

    /** @return */
    public function getInstallation(array $params): Installation
    {
        $arguments = [];
        if (array_key_exists('installation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: installation_id');
        }

        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        $operator = new GetInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());

        return $operator->call($arguments['installation_id']);
    }

    /** @return */
    public function getSubscriptionPlanForAccount(array $params): MarketplacePurchase
    {
        $arguments = [];
        if (array_key_exists('account_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: account_id');
        }

        $arguments['account_id'] = $params['account_id'];
        unset($params['account_id']);
        $operator = new GetSubscriptionPlanForAccount($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀AccountId());

        return $operator->call($arguments['account_id']);
    }

    /** @return Observable<MarketplaceListingPlan> */
    public function listPlansStubbed(array $params): iterable
    {
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
        $operator = new ListPlansStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getOrgInstallation(array $params): Installation
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new GetOrgInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installation());

        return $operator->call($arguments['org']);
    }

    /** @return Observable<UserMarketplacePurchase>|WithoutBody */
    public function listSubscriptionsForAuthenticatedUserStubbed(array $params): iterable|WithoutBody
    {
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
        $operator = new ListSubscriptionsForAuthenticatedUserStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases🌀Stubbed());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getUserInstallation(array $params): Installation
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new GetUserInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Installation());

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function getWebhookDelivery(array $params): HookDelivery
    {
        $arguments = [];
        if (array_key_exists('delivery_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: delivery_id');
        }

        $arguments['delivery_id'] = $params['delivery_id'];
        unset($params['delivery_id']);
        $operator = new GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId());

        return $operator->call($arguments['delivery_id']);
    }

    /** @return Observable<MarketplacePurchase> */
    public function listAccountsForPlan(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('plan_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: plan_id');
        }

        $arguments['plan_id'] = $params['plan_id'];
        unset($params['plan_id']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
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
        $operator = new ListAccountsForPlan($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts());

        return $operator->call($arguments['plan_id'], $arguments['direction'], $arguments['sort'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getSubscriptionPlanForAccountStubbed(array $params): MarketplacePurchase|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('account_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: account_id');
        }

        $arguments['account_id'] = $params['account_id'];
        unset($params['account_id']);
        $operator = new GetSubscriptionPlanForAccountStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId());

        return $operator->call($arguments['account_id']);
    }

    /** @return */
    public function getRepoInstallation(array $params): Installation|BasicError
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
        $operator = new GetRepoInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation());

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function listInstallationReposForAuthenticatedUser(array $params): \ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|WithoutBody
    {
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
        $operator = new ListInstallationReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories());

        return $operator->call($arguments['installation_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<MarketplacePurchase> */
    public function listAccountsForPlanStubbed(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('plan_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: plan_id');
        }

        $arguments['plan_id'] = $params['plan_id'];
        unset($params['plan_id']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
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
        $operator = new ListAccountsForPlanStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts());

        return $operator->call($arguments['plan_id'], $arguments['direction'], $arguments['sort'], $arguments['per_page'], $arguments['page']);
    }
}
