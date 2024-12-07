<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\OrgMembership;

final readonly class Permissions implements \ApiClients\Client\GitHub\Contract\OrgMembership\Permissions
{
    const SCHEMA_JSON = '{
    "required": [
        "can_create_repository"
    ],
    "type": "object",
    "properties": {
        "can_create_repository": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "can_create_repository": false
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('can_create_repository')] public bool $canCreateRepository)
    {
    }
}
