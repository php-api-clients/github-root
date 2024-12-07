<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T78CFC607\T96B6C16A\TC35E0421;

use ApiClients\Client\GitHub\Contract\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TD975B03C implements Attestations
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "bundle": {
            "type": "object",
            "properties": {
                "mediaType": {
                    "type": "string"
                },
                "verificationMaterial": {
                    "type": "object",
                    "properties": {},
                    "additionalProperties": true
                },
                "dsseEnvelope": {
                    "type": "object",
                    "properties": {},
                    "additionalProperties": true
                }
            },
            "description": "The attestation\'s Sigstore Bundle.\\nRefer to the [Sigstore Bundle Specification](https:\\/\\/github.com\\/sigstore\\/protobuf-specs\\/blob\\/main\\/protos\\/sigstore_bundle.proto) for more information."
        },
        "repository_id": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "bundle": {
        "mediaType": "generated",
        "verificationMaterial": [],
        "dsseEnvelope": []
    },
    "repository_id": 13
}';

    /**
     * bundle: The attestation's Sigstore Bundle.
    Refer to the [Sigstore Bundle Specification](https://github.com/sigstore/protobuf-specs/blob/main/protos/sigstore_bundle.proto) for more information.
     */
    public function __construct(public Bundle|null $bundle, #[MapFrom('repository_id')]
    public int|null $repositoryId,)
    {
    }
}
