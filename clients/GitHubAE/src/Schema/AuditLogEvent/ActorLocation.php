<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\AuditLogEvent;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActorLocation
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"country_name":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"country_name":"generated"}';

    public function __construct(#[MapFrom('country_name')] public ?string $countryName)
    {
    }
}
