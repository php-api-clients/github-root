<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Git\CreateTag\Request;

use ApiClients\Client\GitHub\Schema;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "tag",
        "message",
        "object",
        "type"
    ],
    "type": "object",
    "properties": {
        "tag": {
            "type": "string",
            "description": "The tag\'s name. This is typically a version (e.g., \\"v0.0.1\\")."
        },
        "message": {
            "type": "string",
            "description": "The tag message."
        },
        "object": {
            "type": "string",
            "description": "The SHA of the git object this is tagging."
        },
        "type": {
            "enum": [
                "commit",
                "tree",
                "blob"
            ],
            "type": "string",
            "description": "The type of the object we\'re tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`."
        },
        "tagger": {
            "required": [
                "name",
                "email"
            ],
            "type": "object",
            "properties": {
                "name": {
                    "type": "string",
                    "description": "The name of the author of the tag"
                },
                "email": {
                    "type": "string",
                    "description": "The email of the author of the tag"
                },
                "date": {
                    "type": "string",
                    "description": "When this object was tagged. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.",
                    "format": "date-time"
                }
            },
            "description": "An object with information about the individual creating the tag."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "tag": "generated",
    "message": "generated",
    "object": "generated",
    "type": "blob",
    "tagger": {
        "name": "generated",
        "email": "generated",
        "date": "1970-01-01T00:00:00+00:00"
    }
}';

    /**
     * tag: The tag's name. This is typically a version (e.g., "v0.0.1").
     * message: The tag message.
     * object: The SHA of the git object this is tagging.
     * type: The type of the object we're tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`.
     * tagger: An object with information about the individual creating the tag.
     */
    public function __construct(public string $tag, public string $message, public string $object, public string $type, public Schema\Git\CreateTag\Request\ApplicationJson\Tagger|null $tagger)
    {
    }
}
