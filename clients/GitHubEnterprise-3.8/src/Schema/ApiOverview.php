<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ApiOverview
{
    public const SCHEMA_JSON = '{"title":"Api Overview","required":["verifiable_password_authentication"],"type":"object","properties":{"verifiable_password_authentication":{"type":"boolean","examples":[true]},"packages":{"type":"array","items":{"type":"string"},"examples":["13.65.0.0\\/16","157.55.204.33\\/32","2a01:111:f403:f90c::\\/62"]},"dependabot":{"type":"array","items":{"type":"string"},"examples":["192.168.7.15\\/32","192.168.7.16\\/32"]},"installed_version":{"type":"string","examples":["3.8.0"]}},"description":"Api Overview"}';
    public const SCHEMA_TITLE = 'Api Overview';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    public const SCHEMA_EXAMPLE_DATA = '{"verifiable_password_authentication":true,"packages":["13.65.0.0\\/16"],"dependabot":["192.168.7.15\\/32"],"installed_version":"3.8.0"}';
    /**
     * @param ?array<string> $packages
     * @param ?array<string> $dependabot
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('verifiable_password_authentication')] public bool $verifiablePasswordAuthentication, public ?array $packages, public ?array $dependabot, #[\EventSauce\ObjectHydrator\MapFrom('installed_version')] public ?string $installedVersion)
    {
    }
}
