<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\OrgHook;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Config
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "examples": [
                "\\"http:\\/\\/example.com\\/2\\""
            ]
        },
        "insecure_ssl": {
            "type": "string",
            "examples": [
                "\\"0\\""
            ]
        },
        "content_type": {
            "type": "string",
            "examples": [
                "\\"form\\""
            ]
        },
        "secret": {
            "type": "string",
            "examples": [
                "\\"********\\""
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "\\"http:\\/\\/example.com\\/2\\"",
    "insecure_ssl": "\\"0\\"",
    "content_type": "\\"form\\"",
    "secret": "\\"********\\""
}';

    public function __construct(public string|null $url, #[MapFrom('insecure_ssl')]
    public string|null $insecureSsl, #[MapFrom('content_type')]
    public string|null $contentType, public string|null $secret,)
    {
    }
}
