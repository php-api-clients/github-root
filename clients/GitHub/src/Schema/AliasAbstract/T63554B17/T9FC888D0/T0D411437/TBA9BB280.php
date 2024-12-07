<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T63554B17\T9FC888D0\T0D411437;

abstract readonly class TBA9BB280 implements \ApiClients\Client\GitHub\Contract\WebhooksReviewComment\Links
{
    const SCHEMA_JSON = '{
    "required": [
        "self",
        "html",
        "pull_request"
    ],
    "type": "object",
    "properties": {
        "html": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "pull_request": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "self": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "html": {
        "href": "generated"
    },
    "pull_request": {
        "href": "generated"
    },
    "self": {
        "href": "generated"
    }
}';
    public function __construct(public \ApiClients\Client\GitHub\Schema\WebhooksReviewComment\Links\Html $html, #[\EventSauce\ObjectHydrator\MapFrom('pull_request')] public \ApiClients\Client\GitHub\Schema\WebhooksReviewComment\Links\PullRequest $pullRequest, public \ApiClients\Client\GitHub\Schema\WebhooksReviewComment\Links\Self_ $self)
    {
    }
}
