<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Post;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateWithPrForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\CreateWithRepoForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\ExportForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\PublishForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\SetCodespacesAccessUsers;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\StartForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\StopForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Codespaces\StopInOrganization;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Codespaces
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function setCodespacesAccessUsers(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new SetCodespacesAccessUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers());

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function createWithRepoForAuthenticatedUser(array $params): Codespace
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
        $operator = new CreateWithRepoForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces());

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function exportForAuthenticatedUser(array $params): CodespaceExportDetails
    {
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        $operator = new ExportForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports());

        return $operator->call($arguments['codespace_name']);
    }

    /** @return */
    public function publishForAuthenticatedUser(array $params): CodespaceWithFullRepository
    {
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        $operator = new PublishForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish());

        return $operator->call($arguments['codespace_name'], $params);
    }

    /** @return */
    public function startForAuthenticatedUser(array $params): Codespace|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        $operator = new StartForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Start());

        return $operator->call($arguments['codespace_name']);
    }

    /** @return */
    public function stopForAuthenticatedUser(array $params): Codespace
    {
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        $operator = new StopForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Stop());

        return $operator->call($arguments['codespace_name']);
    }

    /** @return */
    public function createForAuthenticatedUser(array $params): Codespace
    {
        $operator = new CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces());

        return $operator->call($params);
    }

    /** @return */
    public function createWithPrForAuthenticatedUser(array $params): Codespace
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
        if (array_key_exists('pull_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pull_number');
        }

        $arguments['pull_number'] = $params['pull_number'];
        unset($params['pull_number']);
        $operator = new CreateWithPrForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $params);
    }

    /** @return */
    public function stopInOrganization(array $params): Codespace|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        $operator = new StopInOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop());

        return $operator->call($arguments['org'], $arguments['username'], $arguments['codespace_name']);
    }
}
