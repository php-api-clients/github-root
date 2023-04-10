<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ApiOverview
{
    public const SCHEMA_JSON = '{"title":"Api Overview","required":["verifiable_password_authentication"],"type":"object","properties":{"verifiable_password_authentication":{"type":"boolean","examples":[true]},"packages":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"dependabot":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"installed_version":{"type":"string","examples":["3.4.0"]}},"description":"Api Overview"}';
    public const SCHEMA_TITLE = 'Api Overview';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    public const SCHEMA_EXAMPLE_DATA = '{"verifiable_password_authentication":true,"packages":["192.0.2.1"],"dependabot":["192.0.2.1"],"installed_version":"3.4.0"}';
    /**
     * @param ?array<string> $packages
     * @param ?array<string> $dependabot
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('verifiable_password_authentication')] public bool $verifiablePasswordAuthentication, public ?array $packages, public ?array $dependabot, #[\EventSauce\ObjectHydrator\MapFrom('installed_version')] public ?string $installedVersion)
    {
    }
}
