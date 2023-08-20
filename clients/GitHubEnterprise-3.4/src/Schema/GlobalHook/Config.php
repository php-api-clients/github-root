<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Config
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "url": {
            "type": "string"
        },
        "content_type": {
            "type": "string"
        },
        "insecure_ssl": {
            "type": "string"
        },
        "secret": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "generated",
    "content_type": "generated",
    "insecure_ssl": "generated",
    "secret": "generated"
}';

    public function __construct(public string|null $url, #[MapFrom('content_type')]
    public string|null $contentType, #[MapFrom('insecure_ssl')]
    public string|null $insecureSsl, public string|null $secret,)
    {
    }
}
