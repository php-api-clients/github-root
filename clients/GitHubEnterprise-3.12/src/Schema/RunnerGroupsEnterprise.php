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
        },
        "workflow_restrictions_read_only": {
            "type": "boolean",
            "description": "If `true`, the `restricted_to_workflows` and `selected_workflows` fields cannot be modified.",
            "default": false
        },
        "restricted_to_workflows": {
            "type": "boolean",
            "description": "If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.",
            "default": false
        },
        "selected_workflows": {
            "type": "array",
            "items": {
                "type": "string",
                "description": "Name of workflow the runner group should be allowed to run. Note that a ref, tag, or long SHA is required.",
                "examples": [
                    "octo-org\\/octo-repo\\/.github\\/workflows\\/deploy.yaml@main"
                ]
            },
            "description": "List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`."
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
    "allows_public_repositories": false,
    "workflow_restrictions_read_only": false,
    "restricted_to_workflows": false,
    "selected_workflows": [
        "generated",
        "generated"
    ]
}';

    /**
     * workflowRestrictionsReadOnly: If `true`, the `restricted_to_workflows` and `selected_workflows` fields cannot be modified.
     * restrictedToWorkflows: If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.
     * selectedWorkflows: List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`.
     */
    public function __construct(public int|float $id, public string $name, public string $visibility, public bool $default, #[MapFrom('selected_organizations_url')]
    public string|null $selectedOrganizationsUrl, #[MapFrom('runners_url')]
    public string $runnersUrl, #[MapFrom('allows_public_repositories')]
    public bool $allowsPublicRepositories, #[MapFrom('workflow_restrictions_read_only')]
    public bool|null $workflowRestrictionsReadOnly, #[MapFrom('restricted_to_workflows')]
    public bool|null $restrictedToWorkflows, #[MapFrom('selected_workflows')]
    public array|null $selectedWorkflows,)
    {
    }
}
