<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;

final readonly class PermissionsAdded implements \ApiClients\Client\GitHub\Contract\PersonalAccessTokenRequest\PermissionsAdded
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "organization": {
            "type": "object",
            "additionalProperties": {
                "type": "string"
            }
        },
        "repository": {
            "type": "object",
            "additionalProperties": {
                "type": "string"
            }
        },
        "other": {
            "type": "object",
            "additionalProperties": {
                "type": "string"
            }
        }
    },
    "description": "New requested permissions, categorized by type of permission."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'New requested permissions, categorized by type of permission.';
    const SCHEMA_EXAMPLE_DATA = '{
    "organization": [],
    "repository": [],
    "other": []
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Organization $organization, public ?\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Repository $repository, public ?\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Other $other)
    {
    }
}
