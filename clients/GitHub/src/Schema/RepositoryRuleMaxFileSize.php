<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleMaxFileSize
{
    public const SCHEMA_JSON         = '{
    "title": "max_file_size",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "max_file_size"
            ],
            "type": "string"
        },
        "parameters": {
            "required": [
                "max_file_size"
            ],
            "type": "object",
            "properties": {
                "max_file_size": {
                    "maximum": 100,
                    "minimum": 1,
                    "type": "integer",
                    "description": "The maximum file size allowed in megabytes. This limit does not apply to Git Large File Storage (Git LFS)."
                }
            }
        }
    },
    "description": "Prevent commits with individual files that exceed the specified limit from being pushed to the commit graph."
}';
    public const SCHEMA_TITLE        = 'max_file_size';
    public const SCHEMA_DESCRIPTION  = 'Prevent commits with individual files that exceed the specified limit from being pushed to the commit graph.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "max_file_size",
    "parameters": {
        "max_file_size": 13
    }
}';

    public function __construct(public string $type, public Schema\RepositoryRuleMaxFileSize\Parameters|null $parameters)
    {
    }
}
