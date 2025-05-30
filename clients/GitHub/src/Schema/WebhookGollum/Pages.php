<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookGollum;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Pages
{
    public const SCHEMA_JSON         = '{
    "required": [
        "page_name",
        "title",
        "summary",
        "action",
        "sha",
        "html_url"
    ],
    "type": "object",
    "properties": {
        "action": {
            "enum": [
                "created",
                "edited"
            ],
            "type": "string",
            "description": "The action that was performed on the page. Can be `created` or `edited`."
        },
        "html_url": {
            "type": "string",
            "description": "Points to the HTML wiki page.",
            "format": "uri"
        },
        "page_name": {
            "type": "string",
            "description": "The name of the page."
        },
        "sha": {
            "type": "string",
            "description": "The latest commit SHA of the page."
        },
        "summary": {
            "type": [
                "string",
                "null"
            ]
        },
        "title": {
            "type": "string",
            "description": "The current page title."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "action": "edited",
    "html_url": "https:\\/\\/example.com\\/",
    "page_name": "generated",
    "sha": "generated",
    "summary": "generated",
    "title": "generated"
}';

    /**
     * action: The action that was performed on the page. Can be `created` or `edited`.
     * htmlUrl: Points to the HTML wiki page.
     * pageName: The name of the page.
     * sha: The latest commit SHA of the page.
     * title: The current page title.
     */
    public function __construct(public string $action, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('page_name')]
    public string $pageName, public string $sha, public string|null $summary, public string $title,)
    {
    }
}
