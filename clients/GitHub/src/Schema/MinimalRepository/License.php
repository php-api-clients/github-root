<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\MinimalRepository;

final readonly class License implements \ApiClients\Client\GitHub\Contract\MinimalRepository\License
{
    const SCHEMA_JSON = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "key": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "spdx_id": {
            "type": "string"
        },
        "url": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "key": "generated",
    "name": "generated",
    "spdx_id": "generated",
    "url": "generated",
    "node_id": "generated"
}';
    public function __construct(public ?string $key, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('spdx_id')] public ?string $spdxId, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId)
    {
    }
}
