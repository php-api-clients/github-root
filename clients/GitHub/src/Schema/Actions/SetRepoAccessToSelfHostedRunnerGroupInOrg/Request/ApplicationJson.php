<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg\Request;

final readonly class ApplicationJson implements \ApiClients\Client\GitHub\Contract\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg\Request\ApplicationJson
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
            "description": "List of repository IDs that can access the runner group."
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
     * selectedRepositoryIds: List of repository IDs that can access the runner group.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('selected_repository_ids')] public array $selectedRepositoryIds)
    {
    }
}
