<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Verification
{
    public const SCHEMA_JSON         = '{
    "title": "Verification",
    "required": [
        "verified",
        "reason",
        "payload",
        "signature",
        "verified_at"
    ],
    "type": "object",
    "properties": {
        "verified": {
            "type": "boolean"
        },
        "reason": {
            "type": "string"
        },
        "payload": {
            "type": [
                "string",
                "null"
            ]
        },
        "signature": {
            "type": [
                "string",
                "null"
            ]
        },
        "verified_at": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = 'Verification';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "verified": false,
    "reason": "generated",
    "payload": "generated",
    "signature": "generated",
    "verified_at": "generated"
}';

    public function __construct(public bool $verified, public string $reason, public string|null $payload, public string|null $signature, #[MapFrom('verified_at')]
    public string|null $verifiedAt,)
    {
    }
}
