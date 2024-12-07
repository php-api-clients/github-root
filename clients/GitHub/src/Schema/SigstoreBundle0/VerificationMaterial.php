<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\SigstoreBundle0;

final readonly class VerificationMaterial implements \ApiClients\Client\GitHub\Contract\SigstoreBundle0\VerificationMaterial
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "x509CertificateChain": {
            "type": "object",
            "properties": {
                "certificates": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "rawBytes": {
                                "type": "string"
                            }
                        }
                    }
                }
            }
        },
        "tlogEntries": {
            "type": "array",
            "items": {
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
            }
        },
        "timestampVerificationData": {
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
    "x509CertificateChain": {
        "certificates": [
            {
                "rawBytes": "generated"
            },
            {
                "rawBytes": "generated"
            }
        ]
    },
    "tlogEntries": [
        {
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
        },
        {
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
        }
    ],
    "timestampVerificationData": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('x509CertificateChain')] public ?\ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\XFiveHundredNineCertificatechain $xFiveHundredNineCertificatechain, public ?array $tlogEntries, public ?string $timestampVerificationData)
    {
    }
}
