<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RuleSuites
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The unique identifier of the rule insight."
        },
        "actor_id": {
            "type": "integer",
            "description": "The number that identifies the user."
        },
        "actor_name": {
            "type": "string",
            "description": "The handle for the GitHub user account."
        },
        "before_sha": {
            "type": "string",
            "description": "The first commit sha before the push evaluation."
        },
        "after_sha": {
            "type": "string",
            "description": "The last commit sha in the push evaluation."
        },
        "ref": {
            "type": "string",
            "description": "The ref name that the evaluation ran on."
        },
        "repository_id": {
            "type": "integer",
            "description": "The ID of the repository associated with the rule evaluation."
        },
        "repository_name": {
            "type": "string",
            "description": "The name of the repository without the `.git` extension."
        },
        "pushed_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2011-01-26T19:06:43Z"
            ]
        },
        "result": {
            "enum": [
                "pass",
                "fail",
                "bypass"
            ],
            "type": "string",
            "description": "The result of the rule evaluations for rules with the `active` enforcement status."
        },
        "evaluation_result": {
            "enum": [
                "pass",
                "fail",
                "bypass"
            ],
            "type": "string",
            "description": "The result of the rule evaluations for rules with the `active` and `evaluate` enforcement statuses, demonstrating whether rules would pass or fail if all rules in the rule suite were `active`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "actor_id": 8,
    "actor_name": "generated",
    "before_sha": "generated",
    "after_sha": "generated",
    "ref": "generated",
    "repository_id": 13,
    "repository_name": "generated",
    "pushed_at": "2011-01-26T19:06:43Z",
    "result": "bypass",
    "evaluation_result": "pass"
}';

    /**
     * id: The unique identifier of the rule insight.
     * actorId: The number that identifies the user.
     * actorName: The handle for the GitHub user account.
     * beforeSha: The first commit sha before the push evaluation.
     * afterSha: The last commit sha in the push evaluation.
     * ref: The ref name that the evaluation ran on.
     * repositoryId: The ID of the repository associated with the rule evaluation.
     * repositoryName: The name of the repository without the `.git` extension.
     * result: The result of the rule evaluations for rules with the `active` enforcement status.
     * evaluationResult: The result of the rule evaluations for rules with the `active` and `evaluate` enforcement statuses, demonstrating whether rules would pass or fail if all rules in the rule suite were `active`.
     */
    public function __construct(public int|null $id, #[MapFrom('actor_id')]
    public int|null $actorId, #[MapFrom('actor_name')]
    public string|null $actorName, #[MapFrom('before_sha')]
    public string|null $beforeSha, #[MapFrom('after_sha')]
    public string|null $afterSha, public string|null $ref, #[MapFrom('repository_id')]
    public int|null $repositoryId, #[MapFrom('repository_name')]
    public string|null $repositoryName, #[MapFrom('pushed_at')]
    public string|null $pushedAt, public string|null $result, #[MapFrom('evaluation_result')]
    public string|null $evaluationResult,)
    {
    }
}
