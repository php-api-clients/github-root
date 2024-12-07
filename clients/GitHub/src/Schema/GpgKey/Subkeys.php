<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\GpgKey;

final readonly class Subkeys implements \ApiClients\Client\GitHub\Contract\GpgKey\Subkeys
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "format": "int64"
        },
        "primary_key_id": {
            "type": "integer"
        },
        "key_id": {
            "type": "string"
        },
        "public_key": {
            "type": "string"
        },
        "emails": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "email": {
                        "type": "string"
                    },
                    "verified": {
                        "type": "boolean"
                    }
                }
            }
        },
        "subkeys": {
            "type": "array",
            "items": {}
        },
        "can_sign": {
            "type": "boolean"
        },
        "can_encrypt_comms": {
            "type": "boolean"
        },
        "can_encrypt_storage": {
            "type": "boolean"
        },
        "can_certify": {
            "type": "boolean"
        },
        "created_at": {
            "type": "string"
        },
        "expires_at": {
            "type": [
                "string",
                "null"
            ]
        },
        "raw_key": {
            "type": [
                "string",
                "null"
            ]
        },
        "revoked": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "primary_key_id": 14,
    "key_id": "generated",
    "public_key": "generated",
    "emails": [
        {
            "email": "generated",
            "verified": false
        },
        {
            "email": "generated",
            "verified": false
        }
    ],
    "subkeys": [
        "generated",
        "generated"
    ],
    "can_sign": false,
    "can_encrypt_comms": false,
    "can_encrypt_storage": false,
    "can_certify": false,
    "created_at": "generated",
    "expires_at": "generated",
    "raw_key": "generated",
    "revoked": false
}';
    public function __construct(public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('primary_key_id')] public ?int $primaryKeyId, #[\EventSauce\ObjectHydrator\MapFrom('key_id')] public ?string $keyId, #[\EventSauce\ObjectHydrator\MapFrom('public_key')] public ?string $publicKey, public ?array $emails, public ?array $subkeys, #[\EventSauce\ObjectHydrator\MapFrom('can_sign')] public ?bool $canSign, #[\EventSauce\ObjectHydrator\MapFrom('can_encrypt_comms')] public ?bool $canEncryptComms, #[\EventSauce\ObjectHydrator\MapFrom('can_encrypt_storage')] public ?bool $canEncryptStorage, #[\EventSauce\ObjectHydrator\MapFrom('can_certify')] public ?bool $canCertify, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('expires_at')] public ?string $expiresAt, #[\EventSauce\ObjectHydrator\MapFrom('raw_key')] public ?string $rawKey, public ?bool $revoked)
    {
    }
}
