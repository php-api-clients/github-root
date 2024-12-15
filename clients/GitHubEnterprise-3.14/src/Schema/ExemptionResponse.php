<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ExemptionResponse
{
    public const SCHEMA_JSON         = '{
    "title": "Exemption response",
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The ID of the exemption response."
        },
        "reviewer_id": {
            "type": "integer",
            "description": "The ID of the user who reviewed the exemption request."
        },
        "reviewer_login": {
            "type": "string",
            "description": "The login of the user who reviewed the exemption request."
        },
        "status": {
            "enum": [
                "approved",
                "rejected",
                "dismissed"
            ],
            "type": "string",
            "description": "The status of the exemption response."
        },
        "reviewer_comment": {
            "type": [
                "string",
                "null"
            ],
            "description": "The comment the reviewer provided when responding to the exemption request."
        },
        "created_at": {
            "type": "string",
            "description": "The date and time the exemption request was created.",
            "format": "date-time"
        }
    },
    "description": "A response to an exemption request by a delegated bypasser."
}';
    public const SCHEMA_TITLE        = 'Exemption response';
    public const SCHEMA_DESCRIPTION  = 'A response to an exemption request by a delegated bypasser.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "reviewer_id": 11,
    "reviewer_login": "generated",
    "status": "dismissed",
    "reviewer_comment": "generated",
    "created_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * id: The ID of the exemption response.
     * reviewerId: The ID of the user who reviewed the exemption request.
     * reviewerLogin: The login of the user who reviewed the exemption request.
     * status: The status of the exemption response.
     * reviewerComment: The comment the reviewer provided when responding to the exemption request.
     * createdAt: The date and time the exemption request was created.
     */
    public function __construct(public int|null $id, #[MapFrom('reviewer_id')]
    public int|null $reviewerId, #[MapFrom('reviewer_login')]
    public string|null $reviewerLogin, public string|null $status, #[MapFrom('reviewer_comment')]
    public string|null $reviewerComment, #[MapFrom('created_at')]
    public string|null $createdAt,)
    {
    }
}
