<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet684AA8A8\Tiet13D7E1E1\Tiet9F44BD94;

abstract readonly class TietC2422667
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "user": {
            "type": [
                "string",
                "null"
            ]
        },
        "org": {
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
    "user": "generated",
    "org": "generated"
}';

    public function __construct(public string|null $user, public string|null $org)
    {
    }
}
