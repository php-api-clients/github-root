<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApiOverview
{
    public const SCHEMA_JSON         = '{"title":"Api Overview","required":["verifiable_password_authentication"],"type":"object","properties":{"verifiable_password_authentication":{"type":"boolean","examples":[true]},"packages":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"dependabot":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"domains":{"type":"object","properties":{"website":{"type":"array","items":{"type":"string","examples":["example.com"]}},"codespaces":{"type":"array","items":{"type":"string","examples":["example.com"]}},"copilot":{"type":"array","items":{"type":"string","examples":["example.com"]}},"packages":{"type":"array","items":{"type":"string","examples":["example.com"]}}}},"installed_version":{"type":"string","examples":["3.7.0"]}},"description":"Api Overview"}';
    public const SCHEMA_TITLE        = 'Api Overview';
    public const SCHEMA_DESCRIPTION  = 'Api Overview';
    public const SCHEMA_EXAMPLE_DATA = '{"verifiable_password_authentication":true,"packages":["192.0.2.1","192.0.2.1"],"dependabot":["192.0.2.1","192.0.2.1"],"domains":{"website":["generated","generated"],"codespaces":["generated","generated"],"copilot":["generated","generated"],"packages":["generated","generated"]},"installed_version":"3.7.0"}';

    public function __construct(#[MapFrom('verifiable_password_authentication')] public bool $verifiablePasswordAuthentication, public ?array $packages, public ?array $dependabot, public ?Schema\ApiOverview\Domains $domains, #[MapFrom('installed_version')] public ?string $installedVersion)
    {
    }
}
