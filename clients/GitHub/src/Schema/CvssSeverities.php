<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class CvssSeverities implements \ApiClients\Client\GitHub\Contract\CvssSeverities
{
    const SCHEMA_JSON = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "cvss_v3": {
            "required": [
                "vector_string",
                "score"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "vector_string": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The CVSS 3 vector string."
                },
                "score": {
                    "maximum": 10,
                    "minimum": 0,
                    "type": [
                        "number",
                        "null"
                    ],
                    "description": "The CVSS 3 score.",
                    "readOnly": true
                }
            }
        },
        "cvss_v4": {
            "required": [
                "vector_string",
                "score"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "vector_string": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The CVSS 4 vector string."
                },
                "score": {
                    "maximum": 10,
                    "minimum": 0,
                    "type": [
                        "number",
                        "null"
                    ],
                    "description": "The CVSS 4 score.",
                    "readOnly": true
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "cvss_v3": {
        "vector_string": "generated",
        "score": 5
    },
    "cvss_v4": {
        "vector_string": "generated",
        "score": 5
    }
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('cvss_v3')] public ?\ApiClients\Client\GitHub\Schema\CvssSeverities\CvssVThree $cvssVThree, #[\EventSauce\ObjectHydrator\MapFrom('cvss_v4')] public ?\ApiClients\Client\GitHub\Schema\CvssSeverities\CvssVFour $cvssVFour)
    {
    }
}
