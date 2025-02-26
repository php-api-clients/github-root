<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\TietB2955C7D\Tiet01E6C402\TietEBB569CC;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet27AEBBCF
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "actor_id": {
            "type": "integer",
            "description": "The ID of the GitHub user who requested the bypass."
        },
        "actor_name": {
            "type": "string",
            "description": "The name of the GitHub user who requested the bypass."
        }
    },
    "description": "The user who requested the bypass."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The user who requested the bypass.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "actor_id": 8,
    "actor_name": "generated"
}';

    /**
     * actorId: The ID of the GitHub user who requested the bypass.
     * actorName: The name of the GitHub user who requested the bypass.
     */
    public function __construct(#[MapFrom('actor_id')]
    public int|null $actorId, #[MapFrom('actor_name')]
    public string|null $actorName,)
    {
    }
}
