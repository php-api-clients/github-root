<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ApiOverview
{
    public const SCHEMA_JSON = '{"title":"Api Overview","required":["verifiable_password_authentication"],"type":"object","properties":{"verifiable_password_authentication":{"type":"boolean","examples":[true]},"packages":{"type":"array","items":{"type":"string"},"examples":["13.65.0.0\\/16","157.55.204.33\\/32","2a01:111:f403:f90c::\\/62"]},"dependabot":{"type":"array","items":{"type":"string"},"examples":["192.168.7.15\\/32","192.168.7.16\\/32"]},"installed_version":{"type":"string","examples":["3.5.0"]}},"description":"Api Overview"}';
    public const SCHEMA_TITLE = 'Api Overview';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    public const SCHEMA_EXAMPLE_DATA = '{"verifiable_password_authentication":true,"packages":["2a01:111:f403:f90c::\\/62"],"dependabot":["192.168.7.15\\/32"],"installed_version":"3.5.0"}';
    public ?bool $verifiable_password_authentication;
    /**
     * @var array<string>
     */
    public array $packages;
    /**
     * @var array<string>
     */
    public array $dependabot;
    public string $installed_version;
    public function __construct(bool $verifiable_password_authentication, array $packages, array $dependabot, string $installed_version)
    {
        $this->verifiable_password_authentication = $verifiable_password_authentication;
        $this->packages = $packages;
        $this->dependabot = $dependabot;
        $this->installed_version = $installed_version;
    }
}
