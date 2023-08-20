<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RunnerGroupsEnterprise
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "name",
        "visibility",
        "allows_public_repositories",
        "default",
        "runners_url"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "number"
        },
        "name": {
            "type": "string"
        },
        "visibility": {
            "type": "string"
        },
        "default": {
            "type": "boolean"
        },
        "selected_organizations_url": {
            "type": "string"
        },
        "runners_url": {
            "type": "string"
        },
        "allows_public_repositories": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 0.2,
    "name": "generated",
    "visibility": "generated",
    "default": false,
    "selected_organizations_url": "generated",
    "runners_url": "generated",
    "allows_public_repositories": false
}';

    public function __construct(public int|float $id, public string $name, public string $visibility, public bool $default, #[MapFrom('selected_organizations_url')]
    public string|null $selectedOrganizationsUrl, #[MapFrom('runners_url')]
    public string $runnersUrl, #[MapFrom('allows_public_repositories')]
    public bool $allowsPublicRepositories,)
    {
    }
}
