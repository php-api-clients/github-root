<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleFileExtensionRestriction
{
    public const SCHEMA_JSON         = '{
    "title": "file_extension_restriction",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "file_extension_restriction"
            ],
            "type": "string"
        },
        "parameters": {
            "required": [
                "restricted_file_extensions"
            ],
            "type": "object",
            "properties": {
                "restricted_file_extensions": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The file extensions that are restricted from being pushed to the commit graph."
                }
            }
        }
    },
    "description": "Prevent commits that include files with specified file extensions from being pushed to the commit graph."
}';
    public const SCHEMA_TITLE        = 'file_extension_restriction';
    public const SCHEMA_DESCRIPTION  = 'Prevent commits that include files with specified file extensions from being pushed to the commit graph.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "file_extension_restriction",
    "parameters": {
        "restricted_file_extensions": [
            "generated",
            "generated"
        ]
    }
}';

    public function __construct(public string $type, public Schema\RepositoryRuleFileExtensionRestriction\Parameters|null $parameters)
    {
    }
}
