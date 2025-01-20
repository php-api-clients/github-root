<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Patch;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\NetworkConfiguration;
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

    public function updateNetworkConfigurationForOrg(array $params): NetworkConfiguration
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
        $operator = new Internal\Operator\HostedCompute\UpdateNetworkConfigurationForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀NetworkConfigurations🌀NetworkConfigurationId());

        return $operator->call($arguments['org'], $arguments['network_configuration_id'], $params);
    }

    public function updateNetworkConfigurationForEnterprise(array $params): NetworkConfiguration
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
        $operator = new Internal\Operator\HostedCompute\UpdateNetworkConfigurationForEnterprise($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀NetworkConfigurations🌀NetworkConfigurationId());

        return $operator->call($arguments['enterprise'], $arguments['network_configuration_id'], $params);
    }
}
