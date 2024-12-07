<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit;

final readonly class Verification implements \ApiClients\Client\GitHub\Contract\WebhookStatus\Commit\Commit\Verification
{
    const SCHEMA_JSON = '{
    "required": [
        "verified",
        "reason",
        "signature",
        "payload"
    ],
    "type": "object",
    "properties": {
        "payload": {
            "type": [
                "string",
                "null"
            ]
        },
        "reason": {
            "enum": [
                "expired_key",
                "not_signing_key",
                "gpgverify_error",
                "gpgverify_unavailable",
                "unsigned",
                "unknown_signature_type",
                "no_user",
                "unverified_email",
                "bad_email",
                "unknown_key",
                "malformed_signature",
                "invalid",
                "valid",
                "bad_cert",
                "ocsp_pending"
            ],
            "type": "string"
        },
        "signature": {
            "type": [
                "string",
                "null"
            ]
        },
        "verified": {
            "type": "boolean"
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
    "payload": "generated",
    "reason": "expired_key",
    "signature": "generated",
    "verified": false,
    "verified_at": "generated"
}';
    public function __construct(public ?string $payload, public string $reason, public ?string $signature, public bool $verified, #[\EventSauce\ObjectHydrator\MapFrom('verified_at')] public ?string $verifiedAt)
    {
    }
}
