<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookCustomPropertyDeleted;

final readonly class Definition implements \ApiClients\Client\GitHub\Contract\WebhookCustomPropertyDeleted\Definition
{
    const SCHEMA_JSON = '{
    "required": [
        "property_name"
    ],
    "type": "object",
    "properties": {
        "property_name": {
            "type": "string",
            "description": "The name of the property that was deleted."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "property_name": "generated"
}';
    /**
     * propertyName: The name of the property that was deleted.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('property_name')] public string $propertyName)
    {
    }
}
