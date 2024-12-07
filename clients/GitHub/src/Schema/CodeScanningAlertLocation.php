<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningAlertLocation implements \ApiClients\Client\GitHub\Contract\CodeScanningAlertLocation
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "path": {
            "type": "string"
        },
        "start_line": {
            "type": "integer"
        },
        "end_line": {
            "type": "integer"
        },
        "start_column": {
            "type": "integer"
        },
        "end_column": {
            "type": "integer"
        }
    },
    "description": "Describe a region within a file for the alert."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Describe a region within a file for the alert.';
    const SCHEMA_EXAMPLE_DATA = '{
    "path": "generated",
    "start_line": 10,
    "end_line": 8,
    "start_column": 12,
    "end_column": 10
}';
    public function __construct(public ?string $path, #[\EventSauce\ObjectHydrator\MapFrom('start_line')] public ?int $startLine, #[\EventSauce\ObjectHydrator\MapFrom('end_line')] public ?int $endLine, #[\EventSauce\ObjectHydrator\MapFrom('start_column')] public ?int $startColumn, #[\EventSauce\ObjectHydrator\MapFrom('end_column')] public ?int $endColumn)
    {
    }
}
