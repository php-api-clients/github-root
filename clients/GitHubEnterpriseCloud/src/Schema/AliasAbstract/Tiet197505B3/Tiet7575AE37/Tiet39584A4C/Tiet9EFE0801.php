<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\Tiet197505B3\Tiet7575AE37\Tiet39584A4C;

abstract readonly class Tiet9EFE0801
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "title": "Validation Error",
            "required": [
                "message",
                "documentation_url"
            ],
            "type": "object",
            "properties": {
                "message": {
                    "type": "string"
                },
                "documentation_url": {
                    "type": "string"
                },
                "errors": {
                    "type": "array",
                    "items": {
                        "required": [
                            "code"
                        ],
                        "type": "object",
                        "properties": {
                            "resource": {
                                "type": "string"
                            },
                            "field": {
                                "type": "string"
                            },
                            "message": {
                                "type": "string"
                            },
                            "code": {
                                "type": "string"
                            },
                            "index": {
                                "type": "integer"
                            },
                            "value": {
                                "oneOf": [
                                    {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    {
                                        "type": [
                                            "integer",
                                            "null"
                                        ]
                                    },
                                    {
                                        "type": [
                                            "array",
                                            "null"
                                        ],
                                        "items": {
                                            "type": "string"
                                        }
                                    }
                                ]
                            }
                        }
                    }
                }
            },
            "description": "Validation Error"
        },
        {
            "title": "Validation Error Simple",
            "required": [
                "message",
                "documentation_url"
            ],
            "type": "object",
            "properties": {
                "message": {
                    "type": "string"
                },
                "documentation_url": {
                    "type": "string"
                },
                "errors": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                }
            },
            "description": "Validation Error Simple"
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
