<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;

final readonly class PermissionsResult implements \ApiClients\Client\GitHub\Contract\PersonalAccessTokenRequest\PermissionsResult
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
    "description": "Permissions requested, categorized by type of permission. This field incorporates `permissions_added` and `permissions_upgraded`."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Permissions requested, categorized by type of permission. This field incorporates `permissions_added` and `permissions_upgraded`.';
    const SCHEMA_EXAMPLE_DATA = '{
    "organization": [],
    "repository": [],
    "other": []
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Organization $organization, public ?\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Repository $repository, public ?\ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Other $other)
    {
    }
}
