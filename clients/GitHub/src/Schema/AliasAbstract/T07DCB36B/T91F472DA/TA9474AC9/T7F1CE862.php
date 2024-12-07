<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T07DCB36B\T91F472DA\TA9474AC9;

use ApiClients\Client\GitHub\Contract\TimelineReviewedEvent\Links;
use ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\Html;
use ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\PullRequest;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T7F1CE862 implements Links
{
    public const SCHEMA_JSON         = '{
    "required": [
        "html",
        "pull_request"
    ],
    "type": "object",
    "properties": {
        "html": {
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            }
        },
        "pull_request": {
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
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
