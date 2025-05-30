<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Issues\SetLabels\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "type": "object",
            "properties": {
                "labels": {
                    "minItems": 1,
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The names of the labels to set for the issue. The labels you set replace any existing labels. You can pass an empty array to remove all labels. Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key. You can also add labels to the existing labels for an issue. For more information, see \\"[Add labels to an issue](https:\\/\\/docs.github.com\\/enterprise-server@3.5\\/rest\\/issues\\/labels#add-labels-to-an-issue).\\""
                }
            }
        },
        {
            "minItems": 1,
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        {
            "type": "object",
            "properties": {
                "labels": {
                    "minItems": 1,
                    "type": "array",
                    "items": {
                        "required": [
                            "name"
                        ],
                        "type": "object",
                        "properties": {
                            "name": {
                                "type": "string"
                            }
                        }
                    }
                }
            }
        },
        {
            "minItems": 1,
            "type": "array",
            "items": {
                "required": [
                    "name"
                ],
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string"
                    }
                }
            }
        },
        {
            "type": "string"
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
