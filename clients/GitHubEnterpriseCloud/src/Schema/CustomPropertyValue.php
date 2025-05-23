<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CustomPropertyValue
{
    public const SCHEMA_JSON         = '{
    "title": "Custom Property Value",
    "required": [
        "property_name",
        "value"
    ],
    "type": "object",
    "properties": {
        "property_name": {
            "type": "string",
            "description": "The name of the property"
        },
        "value": {
            "type": [
                "null",
                "string",
                "array"
            ],
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                }
            ],
            "description": "The value assigned to the property"
        }
    },
    "description": "Custom property name and associated value"
}';
    public const SCHEMA_TITLE        = 'Custom Property Value';
    public const SCHEMA_DESCRIPTION  = 'Custom property name and associated value';
    public const SCHEMA_EXAMPLE_DATA = '{
    "property_name": "generated",
    "value": null
}';

    /**
     * propertyName: The name of the property
     * value: The value assigned to the property
     */
    public function __construct(#[MapFrom('property_name')]
    public string $propertyName, public string|array $value,)
    {
    }
}
