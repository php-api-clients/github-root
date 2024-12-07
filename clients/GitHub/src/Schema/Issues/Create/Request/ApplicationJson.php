<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Issues\Create\Request;

use ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Multiple\Schema\Issues\Create\Request\ApplicationJson\Labels;
use ApiClients\Client\GitHub\Schema\Issues\Create\Request\ApplicationJson\Labels\One;

final readonly class ApplicationJson implements \ApiClients\Client\GitHub\Contract\Issues\Create\Request\ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "title"
    ],
    "type": "object",
    "properties": {
        "title": {
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "integer"
                }
            ],
            "description": "The title of the issue."
        },
        "body": {
            "type": "string",
            "description": "The contents of the issue."
        },
        "assignee": {
            "type": [
                "string",
                "null"
            ],
            "description": "Login for the user that this issue should be assigned to. _NOTE: Only users with push access can set the assignee for new issues. The assignee is silently dropped otherwise. **This field is closing down.**_"
        },
        "milestone": {
            "type": [
                "null",
                "string",
                "integer"
            ],
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "integer",
                    "description": "The `number` of the milestone to associate this issue with. _NOTE: Only users with push access can set the milestone for new issues. The milestone is silently dropped otherwise._"
                }
            ]
        },
        "labels": {
            "type": "array",
            "items": {
                "oneOf": [
                    {
                        "type": "string"
                    },
                    {
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "integer"
                            },
                            "name": {
                                "type": "string"
                            },
                            "description": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "color": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            }
                        }
                    }
                ]
            },
            "description": "Labels to associate with this issue. _NOTE: Only users with push access can set labels for new issues. Labels are silently dropped otherwise._"
        },
        "assignees": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Logins for Users to assign to this issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "title": 7,
    "body": "generated",
    "assignee": "generated",
    "milestone": 11,
    "labels": [
        "generated",
        {
            "id": 2,
            "name": "generated",
            "description": "generated",
            "color": "generated"
        }
    ],
    "assignees": [
        "generated",
        "generated"
    ]
}';

    /**
     * title: The title of the issue.
     * body: The contents of the issue.
     * assignee: Login for the user that this issue should be assigned to. _NOTE: Only users with push access can set the assignee for new issues. The assignee is silently dropped otherwise. **This field is closing down.**_
     * labels: Labels to associate with this issue. _NOTE: Only users with push access can set labels for new issues. Labels are silently dropped otherwise._
     *
     * @param ?array<One> $labels
     * assignees: Logins for Users to assign to this issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._
     */
    public function __construct(public string|int $title, public string|null $body, public string|null $assignee, public string|int|null $milestone, #[Labels]
    public array|null $labels, public array|null $assignees,)
    {
    }
}
