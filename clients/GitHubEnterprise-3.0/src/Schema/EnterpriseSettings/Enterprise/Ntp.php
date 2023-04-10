<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Ntp
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"primary_server":{"type":"string"},"secondary_server":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"primary_server":"generated_primary_server_null","secondary_server":"generated_secondary_server_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('primary_server')] public ?string $primaryServer, #[\EventSauce\ObjectHydrator\MapFrom('secondary_server')] public ?string $secondaryServer)
    {
    }
}
