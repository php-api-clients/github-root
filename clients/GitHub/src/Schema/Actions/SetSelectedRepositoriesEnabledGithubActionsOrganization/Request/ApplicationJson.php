<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization\Request;

final readonly class ApplicationJson implements \ApiClients\Client\GitHub\Contract\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization\Request\ApplicationJson
{
    const SCHEMA_JSON = '{
    "required": [
        "selected_repository_ids"
    ],
    "type": "object",
    "properties": {
        "selected_repository_ids": {
            "type": "array",
            "items": {
                "type": "integer",
                "description": "Unique identifier of the repository."
            },
            "description": "List of repository IDs to enable for GitHub Actions."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "selected_repository_ids": [
        24,
        25
    ]
}';
    /**
     * selectedRepositoryIds: List of repository IDs to enable for GitHub Actions.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('selected_repository_ids')] public array $selectedRepositoryIds)
    {
    }
}
