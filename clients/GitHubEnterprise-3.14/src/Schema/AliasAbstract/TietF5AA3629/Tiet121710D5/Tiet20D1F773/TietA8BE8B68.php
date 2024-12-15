<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\TietF5AA3629\Tiet121710D5\Tiet20D1F773;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietA8BE8B68
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "primary_server": {
            "type": "string"
        },
        "secondary_server": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "primary_server": "generated",
    "secondary_server": "generated"
}';

    public function __construct(#[MapFrom('primary_server')]
    public string|null $primaryServer, #[MapFrom('secondary_server')]
    public string|null $secondaryServer,)
    {
    }
}
