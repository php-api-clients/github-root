<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;

use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Organization;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Other;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Repository;

final readonly class PermissionsUpgraded implements \ApiClients\Client\GitHub\Contract\PersonalAccessTokenRequest\PermissionsUpgraded
{
    public const SCHEMA_JSON         = '{
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Requested permissions that elevate access for a previously approved request for access, categorized by type of permission.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "organization": [],
    "repository": [],
    "other": []
}';

    public function __construct(public Organization|null $organization, public Repository|null $repository, public Other|null $other)
    {
    }
}
