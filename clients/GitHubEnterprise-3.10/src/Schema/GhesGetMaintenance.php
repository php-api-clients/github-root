<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class GhesGetMaintenance
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"hostname":{"type":"string","format":"hostname"},"uuid":{"type":"string","format":"uuid"},"status":{"enum":["on","off","scheduled"],"type":"string"},"scheduled_time":{"type":"string","format":"date"},"connection_services":{"type":"array","items":{"type":"object","properties":{"name":{"type":"string"},"number":{"type":"integer"}}}},"can_unset_maintenance":{"type":"boolean"},"ip_exception_list":{"type":"array","items":{"type":"string","format":"ip\\/cidr"}},"maintenance_mode_message":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"hostname":"generated","uuid":"4ccda740-74c3-4cfa-8571-ebf83c8f300a","status":"scheduled","scheduled_time":"generated","connection_services":[{"name":"generated","number":6},{"name":"generated","number":6}],"can_unset_maintenance":false,"ip_exception_list":["generated","generated"],"maintenance_mode_message":"generated"}';

    public function __construct(public string|null $hostname, public string|null $uuid, public string|null $status, #[MapFrom('scheduled_time')]
    public string|null $scheduledTime, #[MapFrom('connection_services')]
    public array|null $connectionServices, #[MapFrom('can_unset_maintenance')]
    public bool|null $canUnsetMaintenance, #[MapFrom('ip_exception_list')]
    public array|null $ipExceptionList, #[MapFrom('maintenance_mode_message')]
    public string|null $maintenanceModeMessage,)
    {
    }
}
