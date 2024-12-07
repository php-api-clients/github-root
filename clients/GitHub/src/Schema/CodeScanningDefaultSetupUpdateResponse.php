<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningDefaultSetupUpdateResponse implements \ApiClients\Client\GitHub\Contract\CodeScanningDefaultSetupUpdateResponse
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "run_id": {
            "type": "integer",
            "description": "ID of the corresponding run."
        },
        "run_url": {
            "type": "string",
            "description": "URL of the corresponding run."
        }
    },
    "description": "You can use `run_url` to track the status of the run. This includes a property status and conclusion.\\nYou should not rely on this always being an actions workflow run object."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'You can use `run_url` to track the status of the run. This includes a property status and conclusion.
You should not rely on this always being an actions workflow run object.';
    const SCHEMA_EXAMPLE_DATA = '{
    "run_id": 6,
    "run_url": "generated"
}';
    /**
     * runId: ID of the corresponding run.
     * runUrl: URL of the corresponding run.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('run_id')] public ?int $runId, #[\EventSauce\ObjectHydrator\MapFrom('run_url')] public ?string $runUrl)
    {
    }
}
