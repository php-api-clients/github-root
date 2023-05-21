<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
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

    public function listInstallations(array $params)
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
        $operator = new Operator\Apps\ListInstallations($this->browser, $this->authentication);

        return $operator->call($arguments['since'], $arguments['outdated'], $arguments['per_page'], $arguments['page']);
    }

    public function getBySlug(array $params)
    {
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

    public function listReposAccessibleToInstallation(array $params)
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
        if (array_key_exists(Hydrator\Operation\Installation\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Installation\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Installation🌀Repositories();
        }

        $operator = new Operator\Apps\ListReposAccessibleToInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Installation\Repositories::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function listInstallationsForAuthenticatedUser(array $params)
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
        if (array_key_exists(Hydrator\Operation\User\Installations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Installations::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Installations();
        }

        $operator = new Operator\Apps\ListInstallationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Installations::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function getWebhookConfigForApp(array $params)
    {
        if (array_key_exists(Hydrator\Operation\App\Hook\Config::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Hook\Config::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config();
        }

        $operator = new Operator\Apps\GetWebhookConfigForApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Hook\Config::class]);

        return $operator->call();
    }

    public function getInstallation(array $params)
    {
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

    public function getOrgInstallation(array $params)
    {
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

    public function getUserInstallation(array $params)
    {
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

    public function getAuthenticated(array $params)
    {
        if (array_key_exists(Hydrator\Operation\App::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App::class] = $this->hydrators->getObjectMapperOperation🌀App();
        }

        $operator = new Operator\Apps\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App::class]);

        return $operator->call();
    }

    public function checkAuthorization(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists('access_token', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: access_token');
        }

        $arguments['access_token'] = $params['access_token'];
        unset($params['access_token']);
        if (array_key_exists(Hydrator\Operation\Applications\ClientId\Tokens\AccessToken::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\ClientId\Tokens\AccessToken::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Tokens🌀AccessToken();
        }

        $operator = new Operator\Apps\CheckAuthorization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\ClientId\Tokens\AccessToken::class]);

        return $operator->call($arguments['client_id'], $arguments['access_token']);
    }

    public function getRepoInstallation(array $params)
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Installation::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Installation::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation();
        }

        $operator = new Operator\Apps\GetRepoInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Installation::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    public function listInstallationReposForAuthenticatedUser(array $params)
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
        if (array_key_exists(Hydrator\Operation\User\Installations\InstallationId\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Installations\InstallationId\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories();
        }

        $operator = new Operator\Apps\ListInstallationReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Installations\InstallationId\Repositories::class]);

        return $operator->call($arguments['installation_id'], $arguments['per_page'], $arguments['page']);
    }
}
