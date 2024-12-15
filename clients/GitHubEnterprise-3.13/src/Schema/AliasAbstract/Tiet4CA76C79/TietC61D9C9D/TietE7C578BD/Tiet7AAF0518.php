<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet4CA76C79\TietC61D9C9D\TietE7C578BD;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet7AAF0518
{
    public const SCHEMA_JSON         = '{
    "required": [
        "authorized_key"
    ],
    "type": "object",
    "properties": {
        "authorized_key": {
            "type": "string",
            "description": "The public SSH key."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "authorized_key": "generated"
}';

    /**
     * authorizedKey: The public SSH key.
     */
    public function __construct(#[MapFrom('authorized_key')]
    public string $authorizedKey,)
    {
    }
}
