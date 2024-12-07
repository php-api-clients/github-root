<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited;

use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Body;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\StartDate;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\Status;
use ApiClients\Client\GitHub\Schema\WebhookProjectsV2StatusUpdateEdited\Changes\TargetDate;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookProjectsV2StatusUpdateEdited\Changes
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "body": {
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "to": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        },
        "status": {
            "type": "object",
            "properties": {
                "from": {
                    "enum": [
                        "INACTIVE",
                        "ON_TRACK",
                        "AT_RISK",
                        "OFF_TRACK",
                        "COMPLETE",
                        null
                    ],
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "to": {
                    "enum": [
                        "INACTIVE",
                        "ON_TRACK",
                        "AT_RISK",
                        "OFF_TRACK",
                        "COMPLETE",
                        null
                    ],
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        },
        "start_date": {
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date"
                },
                "to": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date"
                }
            }
        },
        "target_date": {
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date"
                },
                "to": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "body": {
        "from": "generated",
        "to": "generated"
    },
    "status": {
        "from": "INACTIVE",
        "to": "INACTIVE"
    },
    "start_date": {
        "from": "generated",
        "to": "generated"
    },
    "target_date": {
        "from": "generated",
        "to": "generated"
    }
}';

    public function __construct(public Body|null $body, public Status|null $status, #[MapFrom('start_date')]
    public StartDate|null $startDate, #[MapFrom('target_date')]
    public TargetDate|null $targetDate,)
    {
    }
}
