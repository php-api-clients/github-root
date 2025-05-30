<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\NetworkConfiguration;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\NetworkSettings;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\HostedCompute\ListNetworkConfigurationsForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\HostedCompute\ListNetworkConfigurationsForOrg\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class HostedCompute
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function listNetworkConfigurationsForEnterprise(array $params): Ok
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
        $operator = new Internal\Operator\HostedCompute\ListNetworkConfigurationsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀NetworkConfigurations());

        return $operator->call($arguments['enterprise'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getNetworkConfigurationForEnterprise(array $params): NetworkConfiguration
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('network_configuration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: network_configuration_id');
        }

        $arguments['network_configuration_id'] = $params['network_configuration_id'];
        unset($params['network_configuration_id']);
        $operator = new Internal\Operator\HostedCompute\GetNetworkConfigurationForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀NetworkConfigurations🌀NetworkConfigurationId());

        return $operator->call($arguments['enterprise'], $arguments['network_configuration_id']);
    }

    /** @return */
    public function getNetworkSettingsForEnterprise(array $params): NetworkSettings
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('network_settings_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: network_settings_id');
        }

        $arguments['network_settings_id'] = $params['network_settings_id'];
        unset($params['network_settings_id']);
        $operator = new Internal\Operator\HostedCompute\GetNetworkSettingsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀NetworkSettings🌀NetworkSettingsId());

        return $operator->call($arguments['enterprise'], $arguments['network_settings_id']);
    }

    /** @return */
    public function listNetworkConfigurationsForOrg(array $params): Json
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
        $operator = new Internal\Operator\HostedCompute\ListNetworkConfigurationsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀NetworkConfigurations());

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getNetworkConfigurationForOrg(array $params): NetworkConfiguration
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('network_configuration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: network_configuration_id');
        }

        $arguments['network_configuration_id'] = $params['network_configuration_id'];
        unset($params['network_configuration_id']);
        $operator = new Internal\Operator\HostedCompute\GetNetworkConfigurationForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀NetworkConfigurations🌀NetworkConfigurationId());

        return $operator->call($arguments['org'], $arguments['network_configuration_id']);
    }

    /** @return */
    public function getNetworkSettingsForOrg(array $params): NetworkSettings
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('network_settings_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: network_settings_id');
        }

        $arguments['network_settings_id'] = $params['network_settings_id'];
        unset($params['network_settings_id']);
        $operator = new Internal\Operator\HostedCompute\GetNetworkSettingsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀NetworkSettings🌀NetworkSettingsId());

        return $operator->call($arguments['org'], $arguments['network_settings_id']);
    }
}
