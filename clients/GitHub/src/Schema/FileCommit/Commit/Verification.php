<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\FileCommit\Commit;

final readonly class Verification implements \ApiClients\Client\GitHub\Contract\FileCommit\Commit\Verification
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "verified": {
            "type": "boolean"
        },
        "reason": {
            "type": "string"
        },
        "signature": {
            "type": [
                "string",
                "null"
            ]
        },
        "payload": {
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "verified": false,
    "reason": "generated",
    "signature": "generated",
    "payload": "generated",
    "verified_at": "generated"
}';
    public function __construct(public ?bool $verified, public ?string $reason, public ?string $signature, public ?string $payload, #[\EventSauce\ObjectHydrator\MapFrom('verified_at')] public ?string $verifiedAt)
    {
    }
}
