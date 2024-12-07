<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookStatus\Commit;

final readonly class Parents implements \ApiClients\Client\GitHub\Contract\WebhookStatus\Commit\Parents
{
    const SCHEMA_JSON = '{
    "required": [
        "sha",
        "url",
        "html_url"
    ],
    "type": "object",
    "properties": {
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "sha": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "html_url": "https:\\/\\/example.com\\/",
    "sha": "generated",
    "url": "https:\\/\\/example.com\\/"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public string $sha, public string $url)
    {
    }
}
