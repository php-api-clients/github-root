<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SecretScanningScanHistory;

use ApiClients\Client\GitHub\Contract\SecretScanningScan;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CustomPatternBackfillScans implements SecretScanningScan, \ApiClients\Client\GitHub\Contract\SecretScanningScanHistory\CustomPatternBackfillScans
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
            "type": "object",
            "properties": {
                "type": {
                    "type": "string",
                    "description": "The type of scan"
                },
                "status": {
                    "type": "string",
                    "description": "The state of the scan. Either \\"completed\\" or \\"running\\""
                },
                "completed_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The time that the scan was completed. Empty if the scan is active",
                    "format": "date-time"
                },
                "started_at": {
                    "type": "string",
                    "description": "The time that the scan was started",
                    "format": "date-time"
                }
            },
            "description": "Information on a single scan performed by secret scanning on the repository"
        },
        {
            "type": "object",
            "properties": {
                "pattern_name": {
                    "type": "string",
                    "description": "Name of the custom pattern for custom pattern scans"
                },
                "pattern_scope": {
                    "type": "string",
                    "description": "Level at which the custom pattern is defined, one of \\"repository\\", \\"organization\\", or \\"enterprise\\""
                }
            }
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "generated",
    "status": "generated",
    "completed_at": "1970-01-01T00:00:00+00:00",
    "started_at": "1970-01-01T00:00:00+00:00",
    "pattern_name": "generated",
    "pattern_scope": "generated"
}';

    /**
     * type: The type of scan
     * status: The state of the scan. Either "completed" or "running"
     * completedAt: The time that the scan was completed. Empty if the scan is active
     * startedAt: The time that the scan was started
     * patternName: Name of the custom pattern for custom pattern scans
     * patternScope: Level at which the custom pattern is defined, one of "repository", "organization", or "enterprise"
     */
    public function __construct(public string|null $type, public string|null $status, #[MapFrom('completed_at')]
    public string|null $completedAt, #[MapFrom('started_at')]
    public string|null $startedAt, #[MapFrom('pattern_name')]
    public string|null $patternName, #[MapFrom('pattern_scope')]
    public string|null $patternScope,)
    {
    }
}
