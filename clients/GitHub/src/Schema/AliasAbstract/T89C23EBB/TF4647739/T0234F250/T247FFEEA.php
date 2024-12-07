<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T89C23EBB\TF4647739\T0234F250;

use ApiClients\Client\GitHub\Contract\WebhookIssueCommentCreated\Issue\ReactionsA;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T247FFEEA implements ReactionsA
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "+1": {
            "type": "integer"
        },
        "-1": {
            "type": "integer"
        },
        "confused": {
            "type": "integer"
        },
        "eyes": {
            "type": "integer"
        },
        "heart": {
            "type": "integer"
        },
        "hooray": {
            "type": "integer"
        },
        "laugh": {
            "type": "integer"
        },
        "rocket": {
            "type": "integer"
        },
        "total_count": {
            "type": "integer"
        },
        "url": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "+1": 11,
    "-1": 10,
    "confused": 8,
    "eyes": 4,
    "heart": 5,
    "hooray": 6,
    "laugh": 5,
    "rocket": 6,
    "total_count": 11,
    "url": "generated"
}';

    public function __construct(#[MapFrom('+1')]
    public int|null $plusOne, #[MapFrom('-1')]
    public int|null $minOne, public int|null $confused, public int|null $eyes, public int|null $heart, public int|null $hooray, public int|null $laugh, public int|null $rocket, #[MapFrom('total_count')]
    public int|null $totalCount, public string|null $url,)
    {
    }
}
