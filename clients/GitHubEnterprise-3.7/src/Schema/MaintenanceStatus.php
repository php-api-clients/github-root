<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class MaintenanceStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"type":"string"},"scheduled_time":{"type":"string"},"connection_services":{"type":"array","items":{"required":["name","number"],"type":"object","properties":{"name":{"type":"string"},"number":{"type":"integer"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"generated_status","scheduled_time":"generated_scheduled_time","connection_services":[{"name":"generated_name","number":13}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubEnterprise\Schema\MaintenanceStatus\ConnectionServices> $connection_services
     */
    public function __construct(public ?string $status, public ?string $scheduled_time, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\MaintenanceStatus\ConnectionServices::class)] public ?array $connection_services)
    {
    }
}
