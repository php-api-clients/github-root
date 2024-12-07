<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Authorization;

final readonly class App implements \ApiClients\Client\GitHub\Contract\Authorization\App
{
    const SCHEMA_JSON = '{
    "required": [
        "client_id",
        "name",
        "url"
    ],
    "type": "object",
    "properties": {
        "client_id": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "client_id": "generated",
    "name": "generated",
    "url": "https:\\/\\/example.com\\/"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('client_id')] public string $clientId, public string $name, public string $url)
    {
    }
}
