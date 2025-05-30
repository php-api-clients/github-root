<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Issues\UpdateMilestone\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "title": {
            "type": "string",
            "description": "The title of the milestone."
        },
        "state": {
            "enum": [
                "open",
                "closed"
            ],
            "type": "string",
            "description": "The state of the milestone. Either `open` or `closed`.",
            "default": "open"
        },
        "description": {
            "type": "string",
            "description": "A description of the milestone."
        },
        "due_on": {
            "type": "string",
            "description": "The milestone due date. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "title": "generated",
    "state": "open",
    "description": "generated",
    "due_on": "1970-01-01T00:00:00+00:00"
}';

    /**
     * title: The title of the milestone.
     * state: The state of the milestone. Either `open` or `closed`.
     * description: A description of the milestone.
     * dueOn: The milestone due date. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function __construct(public string|null $title, public string|null $state, public string|null $description, #[MapFrom('due_on')]
    public string|null $dueOn,)
    {
    }
}
