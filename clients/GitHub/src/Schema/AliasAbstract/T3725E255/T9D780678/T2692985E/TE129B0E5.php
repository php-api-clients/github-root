<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T3725E255\T9D780678\T2692985E;

use ApiClients\Client\GitHub\Contract\WebhooksReview\Links;
use ApiClients\Client\GitHub\Schema\WebhooksReview\Links\Html;
use ApiClients\Client\GitHub\Schema\WebhooksReview\Links\PullRequest;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TE129B0E5 implements Links
{
    public const SCHEMA_JSON         = '{
    "required": [
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "html": {
        "href": "generated"
    },
    "pull_request": {
        "href": "generated"
    }
}';

    public function __construct(public Html $html, #[MapFrom('pull_request')]
    public PullRequest $pullRequest,)
    {
    }
}
