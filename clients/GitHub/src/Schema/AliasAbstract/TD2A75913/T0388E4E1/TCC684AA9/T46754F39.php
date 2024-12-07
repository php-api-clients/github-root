<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TD2A75913\T0388E4E1\TCC684AA9;

use ApiClients\Client\GitHub\Contract\Actions\ReRunJobForWorkflowRun\Request\ApplicationJson;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T46754F39 implements ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "enable_debug_logging": {
            "type": "boolean",
            "description": "Whether to enable debug logging for the re-run.",
            "default": false
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enable_debug_logging": false
}';

    /**
     * enableDebugLogging: Whether to enable debug logging for the re-run.
     */
    public function __construct(#[MapFrom('enable_debug_logging')]
    public bool|null $enableDebugLogging,)
    {
    }
}
