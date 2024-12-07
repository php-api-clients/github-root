<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CheckSuitePreference\Preferences;

final readonly class AutoTriggerChecks implements \ApiClients\Client\GitHub\Contract\CheckSuitePreference\Preferences\AutoTriggerChecks
{
    const SCHEMA_JSON = '{
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
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "app_id": 6,
    "setting": false
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('app_id')] public int $appId, public bool $setting)
    {
    }
}
