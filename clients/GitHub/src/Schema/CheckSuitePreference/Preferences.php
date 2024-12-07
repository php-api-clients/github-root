<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CheckSuitePreference;

final readonly class Preferences implements \ApiClients\Client\GitHub\Contract\CheckSuitePreference\Preferences
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "auto_trigger_checks": {
            "type": "array",
            "items": {
                "required": [
                    "app_id",
                    "setting"
                ],
                "type": "object",
                "properties": {
                    "app_id": {
                        "type": "integer"
                    },
                    "setting": {
                        "type": "boolean"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "auto_trigger_checks": [
        {
            "app_id": 6,
            "setting": false
        },
        {
            "app_id": 6,
            "setting": false
        }
    ]
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('auto_trigger_checks')] public ?array $autoTriggerChecks)
    {
    }
}
