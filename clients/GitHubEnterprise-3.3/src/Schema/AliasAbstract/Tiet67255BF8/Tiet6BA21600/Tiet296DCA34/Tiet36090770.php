<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet67255BF8\Tiet6BA21600\Tiet296DCA34;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet36090770
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "url": {
            "type": "string"
        },
        "state": {
            "type": "string"
        },
        "downloaded_at": {
            "type": [
                "string",
                "null"
            ]
        },
        "message": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "generated",
    "state": "generated",
    "downloaded_at": "generated",
    "message": "generated"
}';

    public function __construct(public string|null $url, public string|null $state, #[MapFrom('downloaded_at')]
    public string|null $downloadedAt, public string|null $message,)
    {
    }
}
