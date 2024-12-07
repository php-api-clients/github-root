<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TBFC83FE4\TCB010FEC\TC14862B3;

use ApiClients\Client\GitHub\Contract\WebhooksIssue\PullRequest;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T0D18AA1D implements PullRequest
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "diff_url": {
            "type": "string",
            "format": "uri"
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "merged_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        },
        "patch_url": {
            "type": "string",
            "format": "uri"
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
    "diff_url": "https:\\/\\/example.com\\/",
    "html_url": "https:\\/\\/example.com\\/",
    "merged_at": "1970-01-01T00:00:00+00:00",
    "patch_url": "https:\\/\\/example.com\\/",
    "url": "https:\\/\\/example.com\\/"
}';

    public function __construct(#[MapFrom('diff_url')]
    public string|null $diffUrl, #[MapFrom('html_url')]
    public string|null $htmlUrl, #[MapFrom('merged_at')]
    public string|null $mergedAt, #[MapFrom('patch_url')]
    public string|null $patchUrl, public string|null $url,)
    {
    }
}
