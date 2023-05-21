<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class MaintenanceStatus
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"status":{"type":"string"},"scheduled_time":{"type":"string"},"connection_services":{"type":"array","items":{"required":["name","number"],"type":"object","properties":{"name":{"type":"string"},"number":{"type":"integer"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"generated","scheduled_time":"generated","connection_services":[{"name":"generated","number":6},{"name":"generated","number":6}]}';

    public function __construct(public ?string $status, #[MapFrom('scheduled_time')] public ?string $scheduledTime, #[MapFrom('connection_services')] public ?array $connectionServices)
    {
    }
}
