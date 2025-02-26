<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\SecretScanning\ReviewBypassRequest\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "bypass_review_id": {
            "type": "integer",
            "description": "ID of the bypass review."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "bypass_review_id": 16
}';

    /**
     * bypassReviewId: ID of the bypass review.
     */
    public function __construct(#[MapFrom('bypass_review_id')]
    public int|null $bypassReviewId,)
    {
    }
}
