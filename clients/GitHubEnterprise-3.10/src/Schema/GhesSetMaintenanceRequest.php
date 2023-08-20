<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class GhesSetMaintenanceRequest
{
    public const SCHEMA_JSON         = '{
    "title": "Set Maintenance mode",
    "required": [
        "enabled"
    ],
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean",
            "description": "Whether to enable maintenance mode."
        },
        "uuid": {
            "type": "string",
            "description": "The UUID of the node to target. This parameter is incompatible with maintenance mode scheduling. Only use `uuid` if the value of `when` is empty or `now`.",
            "format": "uuid"
        },
        "when": {
            "type": "string",
            "description": "The time to enable maintenance mode. If this parameter is empty or set to `now`, maintenance mode is enabled immediately. Otherwise, maintenance mode is enabled at the specified time. The format is ISO 8601.",
            "format": "date-time",
            "examples": [
                "2006-01-02T15:04:05+00:00"
            ]
        },
        "ip_exception_list": {
            "type": "array",
            "items": {
                "type": "string",
                "format": "ip\\/cidr"
            },
            "description": "The list of IP addresses to exclude from maintenance mode. IPv4, IPv6, and CIDR addresses are supported.",
            "examples": [
                "[\\"1.1.1.1\\",\\"192.168.1.0\\/24\\"]"
            ]
        },
        "maintenance_mode_message": {
            "type": "string",
            "description": "The message to display to users when maintenance mode is enabled."
        }
    }
}';
    public const SCHEMA_TITLE        = 'Set Maintenance mode';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": false,
    "uuid": "4ccda740-74c3-4cfa-8571-ebf83c8f300a",
    "when": "2006-01-02T15:04:05+00:00",
    "ip_exception_list": [
        "[\\"1.1.1.1\\",\\"192.168.1.0\\/24\\"]",
        "[\\"1.1.1.1\\",\\"192.168.1.0\\/24\\"]"
    ],
    "maintenance_mode_message": "generated"
}';

    /**
     * enabled: Whether to enable maintenance mode.
     * uuid: The UUID of the node to target. This parameter is incompatible with maintenance mode scheduling. Only use `uuid` if the value of `when` is empty or `now`.
     * when: The time to enable maintenance mode. If this parameter is empty or set to `now`, maintenance mode is enabled immediately. Otherwise, maintenance mode is enabled at the specified time. The format is ISO 8601.
     * ipExceptionList: The list of IP addresses to exclude from maintenance mode. IPv4, IPv6, and CIDR addresses are supported.
     * maintenanceModeMessage: The message to display to users when maintenance mode is enabled.
     */
    public function __construct(public bool $enabled, public string|null $uuid, public string|null $when, #[MapFrom('ip_exception_list')]
    public array|null $ipExceptionList, #[MapFrom('maintenance_mode_message')]
    public string|null $maintenanceModeMessage,)
    {
    }
}
