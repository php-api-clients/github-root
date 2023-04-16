<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ntp
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"primary_server":{"type":"string"},"secondary_server":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"primary_server":"generated_primary_server_null","secondary_server":"generated_secondary_server_null"}';

    public function __construct(#[MapFrom('primary_server')] public ?string $primaryServer, #[MapFrom('secondary_server')] public ?string $secondaryServer)
    {
    }
}
