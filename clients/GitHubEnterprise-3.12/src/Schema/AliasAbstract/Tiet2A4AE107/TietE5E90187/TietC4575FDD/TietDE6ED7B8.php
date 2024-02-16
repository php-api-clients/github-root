<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet2A4AE107\TietE5E90187\TietC4575FDD;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietDE6ED7B8
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string"
        },
        "email": {
            "type": "string"
        },
        "uuid": {
            "type": "string"
        },
        "secret_key_data": {
            "type": "string"
        },
        "public_key_data": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "email": "generated",
    "uuid": "generated",
    "secret_key_data": "generated",
    "public_key_data": "generated"
}';

    public function __construct(public string|null $name, public string|null $email, public string|null $uuid, #[MapFrom('secret_key_data')]
    public string|null $secretKeyData, #[MapFrom('public_key_data')]
    public string|null $publicKeyData,)
    {
    }
}
