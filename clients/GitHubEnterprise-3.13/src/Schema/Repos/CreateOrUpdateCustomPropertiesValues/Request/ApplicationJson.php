<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateOrUpdateCustomPropertiesValues\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "properties"
    ],
    "type": "object",
    "properties": {
        "properties": {
            "type": "array",
            "items": {
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
            },
            "description": "A list of custom property names and associated values to apply to the repositories."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "properties": [
        {
            "property_name": "generated",
            "value": null
        },
        {
            "property_name": "generated",
            "value": null
        }
    ]
}';

    /**
     * properties: A list of custom property names and associated values to apply to the repositories.
     */
    public function __construct(public array $properties)
    {
    }
}
