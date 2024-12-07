<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Fifteen;

final readonly class Parameters implements \ApiClients\Client\GitHub\Contract\RepositoryRuleset\Rules\Fifteen\Parameters
{
    const SCHEMA_JSON = '{
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
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "restricted_file_paths": [
        "generated",
        "generated"
    ]
}';
    /**
     * restrictedFilePaths: The file paths that are restricted from being pushed to the commit graph.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('restricted_file_paths')] public array $restrictedFilePaths)
    {
    }
}
