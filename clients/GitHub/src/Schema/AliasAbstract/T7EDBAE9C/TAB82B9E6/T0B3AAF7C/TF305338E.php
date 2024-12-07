<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T7EDBAE9C\TAB82B9E6\T0B3AAF7C;

abstract readonly class TF305338E implements \ApiClients\Client\GitHub\Contract\OrganizationProgrammaticAccessGrantRequest\Permissions
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
    "description": "Permissions requested, categorized by type of permission."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Permissions requested, categorized by type of permission.';
    const SCHEMA_EXAMPLE_DATA = '{
    "organization": [],
    "repository": [],
    "other": []
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Organization $organization, public ?\ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Repository $repository, public ?\ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Other $other)
    {
    }
}
