<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateDispatchEvent\Request;

final readonly class ApplicationJson implements \ApiClients\Client\GitHub\Contract\Repos\CreateDispatchEvent\Request\ApplicationJson
{
    const SCHEMA_JSON = '{
    "required": [
        "event_type"
    ],
    "type": "object",
    "properties": {
        "event_type": {
            "maxLength": 100,
            "minLength": 1,
            "type": "string",
            "description": "A custom webhook event name. Must be 100 characters or fewer."
        },
        "client_payload": {
            "maxProperties": 10,
            "type": "object",
            "description": "JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10. The total size of the JSON payload must be less than 64KB.",
            "additionalProperties": true
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "event_type": "generated",
    "client_payload": []
}';
    /**
     * eventType: A custom webhook event name. Must be 100 characters or fewer.
     * clientPayload: JSON payload with extra information about the webhook event that your action or workflow may use. The maximum number of top-level properties is 10. The total size of the JSON payload must be less than 64KB.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('event_type')] public string $eventType, #[\EventSauce\ObjectHydrator\MapFrom('client_payload')] public ?\ApiClients\Client\GitHub\Schema\Repos\CreateDispatchEvent\Request\ApplicationJson\ClientPayload $clientPayload)
    {
    }
}
