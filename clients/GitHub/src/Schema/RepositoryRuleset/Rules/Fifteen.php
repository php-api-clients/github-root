<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules;

final readonly class Fifteen implements \ApiClients\Client\GitHub\Contract\RepositoryRuleset\Rules\Fifteen
{
    const SCHEMA_JSON = '{
    "title": "file_path_restriction",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "file_path_restriction"
            ],
            "type": "string"
        },
        "parameters": {
            "required": [
                "restricted_file_paths"
            ],
            "type": "object",
            "properties": {
                "restricted_file_paths": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The file paths that are restricted from being pushed to the commit graph."
                }
            }
        }
    },
    "description": "Prevent commits that include changes in specified file paths from being pushed to the commit graph."
}';
    public const SCHEMA_TITLE = 'file_path_restriction';
    public const SCHEMA_DESCRIPTION = 'Prevent commits that include changes in specified file paths from being pushed to the commit graph.';
    const SCHEMA_EXAMPLE_DATA = '{
    "type": "file_path_restriction",
    "parameters": {
        "restricted_file_paths": [
            "generated",
            "generated"
        ]
    }
}';
    public function __construct(public string $type, public ?\ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Fifteen\Parameters $parameters)
    {
    }
}
