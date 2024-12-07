<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;

final readonly class PermissionsUpgraded implements \ApiClients\Client\GitHub\Contract\PersonalAccessTokenRequest\PermissionsUpgraded
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
    "description": "Requested permissions that elevate access for a previously approved request for access, categorized by type of permission."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Requested permissions that elevate access for a previously approved request for access, categorized by type of permission.';
    const SCHEMA_EXAMPLE_DATA = '{
    "organization": [],
    "repository": [],
    "other": []
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Organization $organization, public ?\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Repository $repository, public ?\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Other $other)
    {
    }
}
