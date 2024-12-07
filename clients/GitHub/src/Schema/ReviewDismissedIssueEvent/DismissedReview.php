<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\ReviewDismissedIssueEvent;

final readonly class DismissedReview implements \ApiClients\Client\GitHub\Contract\ReviewDismissedIssueEvent\DismissedReview
{
    const SCHEMA_JSON = '{
    "required": [
        "state",
        "review_id",
        "dismissal_message"
    ],
    "type": "object",
    "properties": {
        "state": {
            "type": "string"
        },
        "review_id": {
            "type": "integer"
        },
        "dismissal_message": {
            "type": [
                "string",
                "null"
            ]
        },
        "dismissal_commit_id": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "state": "generated",
    "review_id": 9,
    "dismissal_message": "generated",
    "dismissal_commit_id": "generated"
}';
    public function __construct(public string $state, #[\EventSauce\ObjectHydrator\MapFrom('review_id')] public int $reviewId, #[\EventSauce\ObjectHydrator\MapFrom('dismissal_message')] public ?string $dismissalMessage, #[\EventSauce\ObjectHydrator\MapFrom('dismissal_commit_id')] public ?string $dismissalCommitId)
    {
    }
}
