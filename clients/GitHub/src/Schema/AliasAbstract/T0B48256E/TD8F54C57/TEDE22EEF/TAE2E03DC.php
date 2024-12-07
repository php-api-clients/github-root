<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T0B48256E\TD8F54C57\TEDE22EEF;

abstract readonly class TAE2E03DC implements \ApiClients\Client\GitHub\Contract\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle
{
    const SCHEMA_JSON = '{
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
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The attestation\'s Sigstore Bundle.
Refer to the [Sigstore Bundle Specification](https://github.com/sigstore/protobuf-specs/blob/main/protos/sigstore_bundle.proto) for more information.';
    const SCHEMA_EXAMPLE_DATA = '{
    "mediaType": "generated",
    "verificationMaterial": [],
    "dsseEnvelope": []
}';
    public function __construct(public ?string $mediaType, public ?\ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle\VerificationMaterial $verificationMaterial, public ?\ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle\DsseEnvelope $dsseEnvelope)
    {
    }
}
