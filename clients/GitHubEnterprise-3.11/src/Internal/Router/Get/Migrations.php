<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Get;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Migration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Migrations
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return iterable<int,Schema\Migration>|WithoutBody */
    public function listForAuthenticatedUser(array $params): iterable|WithoutBody
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
        $operator = new Internal\Operator\Migrations\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<int,Schema\Migration> */
    public function listForOrg(array $params): iterable
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
        $operator = new Internal\Operator\Migrations\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());

        return $operator->call($arguments['org'], $arguments['exclude'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function downloadArchiveForOrg(array $params): WithoutBody
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
        $operator = new Internal\Operator\Migrations\DownloadArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());

        return $operator->call($arguments['org'], $arguments['migration_id']);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listReposForOrg(array $params): iterable
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
        $operator = new Internal\Operator\Migrations\ListReposForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories());

        return $operator->call($arguments['org'], $arguments['migration_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getStatusForOrg(array $params): Migration
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
        $operator = new Internal\Operator\Migrations\GetStatusForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId());

        return $operator->call($arguments['org'], $arguments['migration_id'], $arguments['exclude']);
    }

    /** @return */
    public function getArchiveForAuthenticatedUser(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        $operator = new Internal\Operator\Migrations\GetArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive());

        return $operator->call($arguments['migration_id']);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listReposForAuthenticatedUser(array $params): iterable
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
        $operator = new Internal\Operator\Migrations\ListReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories());

        return $operator->call($arguments['migration_id'], $arguments['per_page'], $arguments['page']);
    }
}
