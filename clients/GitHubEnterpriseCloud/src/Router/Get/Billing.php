<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrators;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AdvancedSecurityActiveCommitters;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PackagesBillingUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
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
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Actions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Actions::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Actions();
        }

        $operation = new Operation\Billing\GetGithubActionsBillingGhe($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Actions::class], $arguments['enterprise']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsBillingUsage {
            return $operation->createResponse($response);
        });
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
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\AdvancedSecurity::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\AdvancedSecurity::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity();
        }

        $operation = new Operation\Billing\GetGithubAdvancedSecurityBillingGhe($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\AdvancedSecurity::class], $arguments['enterprise'], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AdvancedSecurityActiveCommitters {
            return $operation->createResponse($response);
        });
    }

    public function getGithubPackagesBillingGhe(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Packages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Packages();
        }

        $operation = new Operation\Billing\GetGithubPackagesBillingGhe($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Packages::class], $arguments['enterprise']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PackagesBillingUsage {
            return $operation->createResponse($response);
        });
    }

    public function getSharedStorageBillingGhe(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\SharedStorage::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\SharedStorage::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀SharedStorage();
        }

        $operation = new Operation\Billing\GetSharedStorageBillingGhe($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\SharedStorage::class], $arguments['enterprise']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CombinedBillingUsage {
            return $operation->createResponse($response);
        });
    }

    public function getGithubActionsBillingOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Actions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Actions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions();
        }

        $operation = new Operation\Billing\GetGithubActionsBillingOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Actions::class], $arguments['org']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsBillingUsage {
            return $operation->createResponse($response);
        });
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
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\AdvancedSecurity::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\AdvancedSecurity::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀AdvancedSecurity();
        }

        $operation = new Operation\Billing\GetGithubAdvancedSecurityBillingOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\AdvancedSecurity::class], $arguments['org'], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AdvancedSecurityActiveCommitters {
            return $operation->createResponse($response);
        });
    }

    public function getGithubPackagesBillingOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Packages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages();
        }

        $operation = new Operation\Billing\GetGithubPackagesBillingOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Packages::class], $arguments['org']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PackagesBillingUsage {
            return $operation->createResponse($response);
        });
    }

    public function getSharedStorageBillingOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\SharedStorage::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\SharedStorage::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage();
        }

        $operation = new Operation\Billing\GetSharedStorageBillingOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\SharedStorage::class], $arguments['org']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CombinedBillingUsage {
            return $operation->createResponse($response);
        });
    }

    public function getGithubActionsBillingUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\Actions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\Actions::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Settings🌀Billing🌀Actions();
        }

        $operation = new Operation\Billing\GetGithubActionsBillingUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\Actions::class], $arguments['username']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsBillingUsage {
            return $operation->createResponse($response);
        });
    }

    public function getGithubPackagesBillingUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\Packages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Settings🌀Billing🌀Packages();
        }

        $operation = new Operation\Billing\GetGithubPackagesBillingUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\Packages::class], $arguments['username']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PackagesBillingUsage {
            return $operation->createResponse($response);
        });
    }

    public function getSharedStorageBillingUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\SharedStorage::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\SharedStorage::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Settings🌀Billing🌀SharedStorage();
        }

        $operation = new Operation\Billing\GetSharedStorageBillingUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\SharedStorage::class], $arguments['username']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CombinedBillingUsage {
            return $operation->createResponse($response);
        });
    }
}
