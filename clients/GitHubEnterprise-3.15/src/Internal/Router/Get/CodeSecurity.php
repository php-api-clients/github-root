<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Get;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\CodeSecurityConfiguration;
use ApiClients\Client\GitHubEnterprise\Schema\CodeSecurityConfigurationForRepository;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class CodeSecurity
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\CodeSecurityDefaultConfigurations>|WithoutBody */
    public function getDefaultConfigurations(array $params): iterable|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\CodeSecurity\GetDefaultConfigurations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Defaults());

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getConfiguration(array $params): CodeSecurityConfiguration|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('configuration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: configuration_id');
        }

        $arguments['configuration_id'] = $params['configuration_id'];
        unset($params['configuration_id']);
        $operator = new Internal\Operator\CodeSecurity\GetConfiguration($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId());

        return $operator->call($arguments['org'], $arguments['configuration_id']);
    }

    /** @return Observable<Schema\CodeSecurityConfiguration> */
    public function getConfigurationsForOrg(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('target_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: target_type');
        }

        $arguments['target_type'] = $params['target_type'];
        unset($params['target_type']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new Internal\Operator\CodeSecurity\GetConfigurationsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations());

        return $operator->call($arguments['org'], $arguments['before'], $arguments['after'], $arguments['target_type'], $arguments['per_page']);
    }

    /** @return */
    public function getConfigurationForRepository(array $params): CodeSecurityConfigurationForRepository|WithoutBody
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
        $operator = new Internal\Operator\CodeSecurity\GetConfigurationForRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeSecurityConfiguration());

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return Observable<Schema\CodeSecurityConfigurationRepositories> */
    public function getRepositoriesForConfiguration(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('configuration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: configuration_id');
        }

        $arguments['configuration_id'] = $params['configuration_id'];
        unset($params['configuration_id']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('status', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: status');
        }

        $arguments['status'] = $params['status'];
        unset($params['status']);
        $operator = new Internal\Operator\CodeSecurity\GetRepositoriesForConfiguration($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId🌀Repositories());

        return $operator->call($arguments['org'], $arguments['configuration_id'], $arguments['before'], $arguments['after'], $arguments['per_page'], $arguments['status']);
    }
}
