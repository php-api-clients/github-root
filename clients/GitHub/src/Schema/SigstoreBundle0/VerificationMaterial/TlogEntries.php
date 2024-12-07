<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial;

final readonly class TlogEntries implements \ApiClients\Client\GitHub\Contract\SigstoreBundle0\VerificationMaterial\TlogEntries
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "logIndex": {
            "type": "string"
        },
        "logId": {
            "type": "object",
            "properties": {
                "keyId": {
                    "type": "string"
                }
            }
        },
        "kindVersion": {
            "type": "object",
            "properties": {
                "kind": {
                    "type": "string"
                },
                "version": {
                    "type": "string"
                }
            }
        },
        "integratedTime": {
            "type": "string"
        },
        "inclusionPromise": {
            "type": "object",
            "properties": {
                "signedEntryTimestamp": {
                    "type": "string"
                }
            }
        },
        "inclusionProof": {
            "type": [
                "string",
                "null"
            ]
        },
        "canonicalizedBody": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "logIndex": "generated",
    "logId": {
        "keyId": "generated"
    },
    "kindVersion": {
        "kind": "generated",
        "version": "generated"
    },
    "integratedTime": "generated",
    "inclusionPromise": {
        "signedEntryTimestamp": "generated"
    },
    "inclusionProof": "generated",
    "canonicalizedBody": "generated"
}';
    public function __construct(public ?string $logIndex, public ?\ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\TlogEntries\LogId $logId, public ?\ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\TlogEntries\KindVersion $kindVersion, public ?string $integratedTime, public ?\ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\TlogEntries\InclusionPromise $inclusionPromise, public ?string $inclusionProof, public ?string $canonicalizedBody)
    {
    }
}
