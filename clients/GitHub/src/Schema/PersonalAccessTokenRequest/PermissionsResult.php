<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;

use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Organization;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Other;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Repository;

final readonly class PermissionsResult implements \ApiClients\Client\GitHub\Contract\PersonalAccessTokenRequest\PermissionsResult
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
    "description": "Permissions requested, categorized by type of permission. This field incorporates `permissions_added` and `permissions_upgraded`."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Permissions requested, categorized by type of permission. This field incorporates `permissions_added` and `permissions_upgraded`.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "organization": [],
    "repository": [],
    "other": []
}';

    public function __construct(public Organization|null $organization, public Repository|null $repository, public Other|null $other)
    {
    }
}
