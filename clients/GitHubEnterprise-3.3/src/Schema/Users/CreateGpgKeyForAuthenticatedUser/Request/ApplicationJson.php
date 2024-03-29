<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Users\CreateGpgKeyForAuthenticatedUser\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "armored_public_key"
    ],
    "type": "object",
    "properties": {
        "armored_public_key": {
            "type": "string",
            "description": "A GPG key in ASCII-armored format."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "armored_public_key": "generated"
}';

    /**
     * armoredPublicKey: A GPG key in ASCII-armored format.
     */
    public function __construct(#[MapFrom('armored_public_key')]
    public string $armoredPublicKey,)
    {
    }
}
