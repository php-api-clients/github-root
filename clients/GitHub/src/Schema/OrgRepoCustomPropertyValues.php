<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class OrgRepoCustomPropertyValues implements \ApiClients\Client\GitHub\Contract\OrgRepoCustomPropertyValues
{
    const SCHEMA_JSON = '{
    "title": "Organization Repository Custom Property Values",
    "required": [
        "repository_id",
        "repository_name",
        "repository_full_name",
        "properties"
    ],
    "type": "object",
    "properties": {
        "repository_id": {
            "type": "integer",
            "examples": [
                1296269
            ]
        },
        "repository_name": {
            "type": "string",
            "examples": [
                "Hello-World"
            ]
        },
        "repository_full_name": {
            "type": "string",
            "examples": [
                "octocat\\/Hello-World"
            ]
        },
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
            "description": "List of custom property names and associated values"
        }
    },
    "description": "List of custom property values for a repository"
}';
    public const SCHEMA_TITLE = 'Organization Repository Custom Property Values';
    public const SCHEMA_DESCRIPTION = 'List of custom property values for a repository';
    const SCHEMA_EXAMPLE_DATA = '{
    "repository_id": 13,
    "repository_name": "generated",
    "repository_full_name": "generated",
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
     * properties: List of custom property names and associated values
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('repository_id')] public int $repositoryId, #[\EventSauce\ObjectHydrator\MapFrom('repository_name')] public string $repositoryName, #[\EventSauce\ObjectHydrator\MapFrom('repository_full_name')] public string $repositoryFullName, public array $properties)
    {
    }
}
