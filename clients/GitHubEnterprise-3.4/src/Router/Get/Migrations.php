<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema\Migration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function array_key_exists;

final class Migrations
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

    public function listForAuthenticatedUser(array $params)
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
        if (array_key_exists(Hydrator\Operation\User\Migrations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Migrations::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Migrations();
        }

        $operation = new Operation\Migrations\ListForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations::class], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function listForOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('exclude', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: exclude');
        }

        $arguments['exclude'] = $params['exclude'];
        unset($params['exclude']);
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
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Migrations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations();
        }

        $operation = new Operation\Migrations\ListForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations::class], $arguments['org'], $arguments['exclude'], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function downloadArchiveForOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Archive();
        }

        $operation = new Operation\Migrations\DownloadArchiveForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive::class], $arguments['org'], $arguments['migration_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function listReposForOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
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
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories();
        }

        $operation = new Operation\Migrations\ListReposForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories::class], $arguments['org'], $arguments['migration_id'], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function getStatusForOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists('exclude', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: exclude');
        }

        $arguments['exclude'] = $params['exclude'];
        unset($params['exclude']);
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb();
        }

        $operation = new Operation\Migrations\GetStatusForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb::class], $arguments['org'], $arguments['migration_id'], $arguments['exclude']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Migration {
            return $operation->createResponse($response);
        });
    }

    public function getArchiveForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists(Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Archive::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Archive::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Archive();
        }

        $operation = new Operation\Migrations\GetArchiveForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Archive::class], $arguments['migration_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function listReposForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
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
        if (array_key_exists(Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Repositories();
        }

        $operation = new Operation\Migrations\ListReposForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repositories::class], $arguments['migration_id'], $arguments['per_page'], $arguments['page']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function downloadArchiveForOrgStreaming(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Archive();
        }

        $operation = new Operation\Migrations\DownloadArchiveForOrgStreaming($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive::class], $this->browser, $arguments['org'], $arguments['migration_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
