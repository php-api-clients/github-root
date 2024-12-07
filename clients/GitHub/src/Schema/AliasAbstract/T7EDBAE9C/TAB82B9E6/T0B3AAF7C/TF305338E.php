<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T7EDBAE9C\TAB82B9E6\T0B3AAF7C;

use ApiClients\Client\GitHub\Contract\OrganizationProgrammaticAccessGrantRequest\Permissions;
use ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Organization;
use ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Other;
use ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Repository;

abstract readonly class TF305338E implements Permissions
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
    "description": "Permissions requested, categorized by type of permission."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Permissions requested, categorized by type of permission.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "organization": [],
    "repository": [],
    "other": []
}';

    public function __construct(public Organization|null $organization, public Repository|null $repository, public Other|null $other)
    {
    }
}
