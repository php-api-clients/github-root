<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SshKey
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "key": {
            "type": "string"
        },
        "pretty-print": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "key": "generated",
    "pretty-print": "generated"
}';

    public function __construct(public string|null $key, #[MapFrom('pretty-print')]
    public string|null $prettyMinPrint,)
    {
    }
}
