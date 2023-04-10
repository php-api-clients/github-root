<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class MaintenanceStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"type":"string"},"scheduled_time":{"type":"string"},"connection_services":{"type":"array","items":{"required":["name","number"],"type":"object","properties":{"name":{"type":"string"},"number":{"type":"integer"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"generated_status_null","scheduled_time":"generated_scheduled_time_null","connection_services":[{"name":"generated_name_null","number":13}]}';
    /**
     * @param ?array<\ApiClients\Client\Github\Schema\MaintenanceStatus\ConnectionServices> $connectionServices
     */
    public function __construct(public ?string $status, #[\EventSauce\ObjectHydrator\MapFrom('scheduled_time')] public ?string $scheduledTime, #[\EventSauce\ObjectHydrator\MapFrom('connection_services')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\MaintenanceStatus\ConnectionServices::class)] public ?array $connectionServices)
    {
    }
}
