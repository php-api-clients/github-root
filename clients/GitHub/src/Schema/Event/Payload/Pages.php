<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Event\Payload;

final readonly class Pages implements \ApiClients\Client\GitHub\Contract\Event\Payload\Pages
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "page_name": {
            "type": "string"
        },
        "title": {
            "type": "string"
        },
        "summary": {
            "type": [
                "string",
                "null"
            ]
        },
        "action": {
            "type": "string"
        },
        "sha": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "page_name": "generated",
    "title": "generated",
    "summary": "generated",
    "action": "generated",
    "sha": "generated",
    "html_url": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('page_name')] public ?string $pageName, public ?string $title, public ?string $summary, public ?string $action, public ?string $sha, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl)
    {
    }
}
