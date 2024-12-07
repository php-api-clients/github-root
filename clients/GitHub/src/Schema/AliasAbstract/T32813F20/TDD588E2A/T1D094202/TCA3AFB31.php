<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T32813F20\TDD588E2A\T1D094202;

abstract readonly class TCA3AFB31 implements \ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "end_column": {
            "type": "integer"
        },
        "end_line": {
            "type": "integer"
        },
        "path": {
            "type": "string"
        },
        "start_column": {
            "type": "integer"
        },
        "start_line": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "end_column": 10,
    "end_line": 8,
    "path": "generated",
    "start_column": 12,
    "start_line": 10
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('end_column')] public ?int $endColumn, #[\EventSauce\ObjectHydrator\MapFrom('end_line')] public ?int $endLine, public ?string $path, #[\EventSauce\ObjectHydrator\MapFrom('start_column')] public ?int $startColumn, #[\EventSauce\ObjectHydrator\MapFrom('start_line')] public ?int $startLine)
    {
    }
}
