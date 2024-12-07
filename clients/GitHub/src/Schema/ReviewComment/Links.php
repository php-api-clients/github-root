<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\ReviewComment;

final readonly class Links implements \ApiClients\Client\GitHub\Contract\ReviewComment\Links
{
    const SCHEMA_JSON = '{
    "required": [
        "self",
        "html",
        "pull_request"
    ],
    "type": "object",
    "properties": {
        "self": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            },
            "description": "Hypermedia Link"
        },
        "html": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            },
            "description": "Hypermedia Link"
        },
        "pull_request": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            },
            "description": "Hypermedia Link"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "self": {
        "href": "generated"
    },
    "html": {
        "href": "generated"
    },
    "pull_request": {
        "href": "generated"
    }
}';
    /**
     * self: Hypermedia Link
     * html: Hypermedia Link
     * pullRequest: Hypermedia Link
     */
    public function __construct(public \ApiClients\Client\GitHub\Schema\Link $self, public \ApiClients\Client\GitHub\Schema\Link $html, #[\EventSauce\ObjectHydrator\MapFrom('pull_request')] public \ApiClients\Client\GitHub\Schema\Link $pullRequest)
    {
    }
}
