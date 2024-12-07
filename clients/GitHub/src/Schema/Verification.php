<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class Verification implements \ApiClients\Client\GitHub\Contract\Verification
{
    const SCHEMA_JSON = '{
    "title": "Verification",
    "required": [
        "verified",
        "reason",
        "payload",
        "signature"
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
    public const SCHEMA_TITLE = 'Verification';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "verified": false,
    "reason": "generated",
    "payload": "generated",
    "signature": "generated",
    "verified_at": "generated"
}';
    public function __construct(public bool $verified, public string $reason, public ?string $payload, public ?string $signature, #[\EventSauce\ObjectHydrator\MapFrom('verified_at')] public ?string $verifiedAt)
    {
    }
}
