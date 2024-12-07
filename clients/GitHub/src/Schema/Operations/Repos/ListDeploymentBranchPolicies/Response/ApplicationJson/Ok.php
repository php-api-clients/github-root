<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok implements \ApiClients\Client\GitHub\Contract\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "branch_policies"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer",
            "description": "The number of deployment branch policies for the environment.",
            "examples": [
                2
            ]
        },
        "branch_policies": {
            "type": "array",
            "items": {
                "title": "Deployment branch policy",
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "description": "The unique identifier of the branch or tag policy.",
                        "examples": [
                            361471
                        ]
                    },
                    "node_id": {
                        "type": "string",
                        "examples": [
                            "MDE2OkdhdGVCcmFuY2hQb2xpY3kzNjE0NzE="
                        ]
                    },
                    "name": {
                        "type": "string",
                        "description": "The name pattern that branches or tags must match in order to deploy to the environment.",
                        "examples": [
                            "release\\/*"
                        ]
                    },
                    "type": {
                        "enum": [
                            "branch",
                            "tag"
                        ],
                        "type": "string",
                        "description": "Whether this rule targets a branch or tag.",
                        "examples": [
                            "branch"
                        ]
                    }
                },
                "description": "Details of a deployment branch or tag policy."
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "branch_policies": [
        {
            "id": 2,
            "node_id": "generated",
            "name": "generated",
            "type": "branch"
        },
        {
            "id": 2,
            "node_id": "generated",
            "name": "generated",
            "type": "branch"
        }
    ]
}';

    /**
     * totalCount: The number of deployment branch policies for the environment.
     */
    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, #[MapFrom('branch_policies')]
    public array $branchPolicies,)
    {
    }
}
