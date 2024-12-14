<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Issues\RemoveSubIssue\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson implements \ApiClients\Client\GitHub\Contract\Issues\RemoveSubIssue\Request\ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "sub_issue_id"
    ],
    "type": "object",
    "properties": {
        "sub_issue_id": {
            "type": "integer",
            "description": "The sub-issue to remove"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "sub_issue_id": 12
}';

    /**
     * subIssueId: The sub-issue to remove
     */
    public function __construct(#[MapFrom('sub_issue_id')]
    public int $subIssueId,)
    {
    }
}
