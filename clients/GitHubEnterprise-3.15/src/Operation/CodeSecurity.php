<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\CodeSecurityConfiguration;
use ApiClients\Client\GitHubEnterprise\Schema\CodeSecurityConfigurationForRepository;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\CodeSecurity\AttachConfiguration\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\CodeSecurity\SetConfigurationAsDefault\Response\ApplicationJson\Ok;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class CodeSecurity
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,Schema\CodeSecurityConfiguration> */
    public function getConfigurationsForOrg(string $org, string $before, string $after, string $targetType, int $perPage): iterable
    {
        return $this->operators->codeSecurity👷GetConfigurationsForOrg()->call($org, $before, $after, $targetType, $perPage);
    }

    public function createConfiguration(string $org, array $params): CodeSecurityConfiguration
    {
        return $this->operators->codeSecurity👷CreateConfiguration()->call($org, $params);
    }

    /** @return iterable<int,Schema\CodeSecurityDefaultConfigurations>|WithoutBody */
    public function getDefaultConfigurations(string $org): iterable|WithoutBody
    {
        return $this->operators->codeSecurity👷GetDefaultConfigurations()->call($org);
    }

    public function detachConfiguration(string $org, array $params): WithoutBody
    {
        return $this->operators->codeSecurity👷DetachConfiguration()->call($org, $params);
    }

    public function getConfiguration(string $org, int $configurationId): CodeSecurityConfiguration|WithoutBody
    {
        return $this->operators->codeSecurity👷GetConfiguration()->call($org, $configurationId);
    }

    public function deleteConfiguration(string $org, int $configurationId): WithoutBody
    {
        return $this->operators->codeSecurity👷DeleteConfiguration()->call($org, $configurationId);
    }

    public function updateConfiguration(string $org, int $configurationId, array $params): CodeSecurityConfiguration|WithoutBody
    {
        return $this->operators->codeSecurity👷UpdateConfiguration()->call($org, $configurationId, $params);
    }

    public function attachConfiguration(string $org, int $configurationId, array $params): Json
    {
        return $this->operators->codeSecurity👷AttachConfiguration()->call($org, $configurationId, $params);
    }

    public function setConfigurationAsDefault(string $org, int $configurationId, array $params): Ok
    {
        return $this->operators->codeSecurity👷SetConfigurationAsDefault()->call($org, $configurationId, $params);
    }

    /** @return iterable<int,Schema\CodeSecurityConfigurationRepositories> */
    public function getRepositoriesForConfiguration(string $org, int $configurationId, string $before, string $after, int $perPage, string $status): iterable
    {
        return $this->operators->codeSecurity👷GetRepositoriesForConfiguration()->call($org, $configurationId, $before, $after, $perPage, $status);
    }

    public function getConfigurationForRepository(string $owner, string $repo): CodeSecurityConfigurationForRepository|WithoutBody
    {
        return $this->operators->codeSecurity👷GetConfigurationForRepository()->call($owner, $repo);
    }
}
