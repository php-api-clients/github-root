<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Delete;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\CancelImport;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\DeleteArchiveForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\DeleteArchiveForOrg;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\UnlockRepoForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Migrations\UnlockRepoForOrg;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Migrations
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function cancelImport(array $params): WithoutBody
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
        $operator = new CancelImport($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function deleteArchiveForAuthenticatedUser(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        $operator = new DeleteArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive());

        return $operator->call($arguments['migration_id']);
    }

    /** @return */
    public function unlockRepoForAuthenticatedUser(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists('repo_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo_name');
        }

        $arguments['repo_name'] = $params['repo_name'];
        unset($params['repo_name']);
        $operator = new UnlockRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock());

        return $operator->call($arguments['migration_id'], $arguments['repo_name']);
    }

    /** @return */
    public function deleteArchiveForOrg(array $params): WithoutBody
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
        $operator = new DeleteArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());

        return $operator->call($arguments['org'], $arguments['migration_id']);
    }

    /** @return */
    public function unlockRepoForOrg(array $params): WithoutBody
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
        if (array_key_exists('repo_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo_name');
        }

        $arguments['repo_name'] = $params['repo_name'];
        unset($params['repo_name']);
        $operator = new UnlockRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock());

        return $operator->call($arguments['org'], $arguments['migration_id'], $arguments['repo_name']);
    }
}
