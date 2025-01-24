<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\NetworkConfiguration;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\NetworkSettings;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\HostedCompute\ListNetworkConfigurationsForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\HostedCompute\ListNetworkConfigurationsForOrg\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class HostedCompute
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function listNetworkConfigurationsForEnterprise(string $enterprise, int $perPage, int $page): Ok
    {
        return $this->operators->hostedCompute👷ListNetworkConfigurationsForEnterprise()->call($enterprise, $perPage, $page);
    }

    /** @return */
    public function createNetworkConfigurationForEnterprise(string $enterprise, array $params): NetworkConfiguration
    {
        return $this->operators->hostedCompute👷CreateNetworkConfigurationForEnterprise()->call($enterprise, $params);
    }

    /** @return */
    public function getNetworkConfigurationForEnterprise(string $enterprise, string $networkConfigurationId): NetworkConfiguration
    {
        return $this->operators->hostedCompute👷GetNetworkConfigurationForEnterprise()->call($enterprise, $networkConfigurationId);
    }

    /** @return */
    public function deleteNetworkConfigurationFromEnterprise(string $enterprise, string $networkConfigurationId): WithoutBody
    {
        return $this->operators->hostedCompute👷DeleteNetworkConfigurationFromEnterprise()->call($enterprise, $networkConfigurationId);
    }

    /** @return */
    public function updateNetworkConfigurationForEnterprise(string $enterprise, string $networkConfigurationId, array $params): NetworkConfiguration
    {
        return $this->operators->hostedCompute👷UpdateNetworkConfigurationForEnterprise()->call($enterprise, $networkConfigurationId, $params);
    }

    /** @return */
    public function getNetworkSettingsForEnterprise(string $enterprise, string $networkSettingsId): NetworkSettings
    {
        return $this->operators->hostedCompute👷GetNetworkSettingsForEnterprise()->call($enterprise, $networkSettingsId);
    }

    /** @return */
    public function listNetworkConfigurationsForOrg(string $org, int $perPage, int $page): Json
    {
        return $this->operators->hostedCompute👷ListNetworkConfigurationsForOrg()->call($org, $perPage, $page);
    }

    /** @return */
    public function createNetworkConfigurationForOrg(string $org, array $params): NetworkConfiguration
    {
        return $this->operators->hostedCompute👷CreateNetworkConfigurationForOrg()->call($org, $params);
    }

    /** @return */
    public function getNetworkConfigurationForOrg(string $org, string $networkConfigurationId): NetworkConfiguration
    {
        return $this->operators->hostedCompute👷GetNetworkConfigurationForOrg()->call($org, $networkConfigurationId);
    }

    /** @return */
    public function deleteNetworkConfigurationFromOrg(string $org, string $networkConfigurationId): WithoutBody
    {
        return $this->operators->hostedCompute👷DeleteNetworkConfigurationFromOrg()->call($org, $networkConfigurationId);
    }

    /** @return */
    public function updateNetworkConfigurationForOrg(string $org, string $networkConfigurationId, array $params): NetworkConfiguration
    {
        return $this->operators->hostedCompute👷UpdateNetworkConfigurationForOrg()->call($org, $networkConfigurationId, $params);
    }

    /** @return */
    public function getNetworkSettingsForOrg(string $org, string $networkSettingsId): NetworkSettings
    {
        return $this->operators->hostedCompute👷GetNetworkSettingsForOrg()->call($org, $networkSettingsId);
    }
}
