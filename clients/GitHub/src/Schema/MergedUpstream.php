<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class MergedUpstream implements \ApiClients\Client\GitHub\Contract\MergedUpstream
{
    const SCHEMA_JSON = '{
    "title": "Merged upstream",
    "type": "object",
    "properties": {
        "message": {
            "type": "string"
        },
        "merge_type": {
            "enum": [
                "merge",
                "fast-forward",
                "none"
            ],
            "type": "string"
        },
        "base_branch": {
            "type": "string"
        }
    },
    "description": "Results of a successful merge upstream request"
}';
    public const SCHEMA_TITLE = 'Merged upstream';
    public const SCHEMA_DESCRIPTION = 'Results of a successful merge upstream request';
    const SCHEMA_EXAMPLE_DATA = '{
    "message": "generated",
    "merge_type": "merge",
    "base_branch": "generated"
}';
    public function __construct(public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('merge_type')] public ?string $mergeType, #[\EventSauce\ObjectHydrator\MapFrom('base_branch')] public ?string $baseBranch)
    {
    }
}
