<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookMetaDeleted\Hook;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Config implements \ApiClients\Client\GitHub\Contract\WebhookMetaDeleted\Hook\Config
{
    public const SCHEMA_JSON         = '{
    "required": [
        "content_type",
        "insecure_ssl",
        "url"
    ],
    "type": "object",
    "properties": {
        "content_type": {
            "enum": [
                "json",
                "form"
            ],
            "type": "string"
        },
        "insecure_ssl": {
            "type": "string"
        },
        "secret": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "content_type": "json",
    "insecure_ssl": "generated",
    "secret": "generated",
    "url": "https:\\/\\/example.com\\/"
}';

    public function __construct(#[MapFrom('content_type')]
    public string $contentType, #[MapFrom('insecure_ssl')]
    public string $insecureSsl, public string|null $secret, public string $url,)
    {
    }
}
