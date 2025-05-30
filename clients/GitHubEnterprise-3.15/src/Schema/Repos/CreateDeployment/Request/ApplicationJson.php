<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateDeployment\Request;

use ApiClients\Client\GitHubEnterprise\Internal\Attribute\CastUnionToType\Schema\Repos\CreateDeployment\Request\ApplicationJson\Payload;
use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "ref"
    ],
    "type": "object",
    "properties": {
        "ref": {
            "type": "string",
            "description": "The ref to deploy. This can be a branch, tag, or SHA."
        },
        "task": {
            "type": "string",
            "description": "Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).",
            "default": "deploy"
        },
        "auto_merge": {
            "type": "boolean",
            "description": "Attempts to automatically merge the default branch into the requested ref, if it\'s behind the default branch.",
            "default": true
        },
        "required_contexts": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The [status](https:\\/\\/docs.github.com\\/enterprise-server@3.15\\/rest\\/commits\\/statuses) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts."
        },
        "payload": {
            "oneOf": [
                {
                    "type": "object",
                    "additionalProperties": true
                },
                {
                    "type": "string",
                    "description": "JSON payload with extra information about the deployment.",
                    "default": ""
                }
            ]
        },
        "environment": {
            "type": "string",
            "description": "Name for the target deployment environment (e.g., `production`, `staging`, `qa`).",
            "default": "production"
        },
        "description": {
            "type": [
                "string",
                "null"
            ],
            "description": "Short description of the deployment.",
            "default": ""
        },
        "transient_environment": {
            "type": "boolean",
            "description": "Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`",
            "default": false
        },
        "production_environment": {
            "type": "boolean",
            "description": "Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ref": "generated",
    "task": "generated",
    "auto_merge": false,
    "required_contexts": [
        "generated",
        "generated"
    ],
    "payload": null,
    "environment": "generated",
    "description": "generated",
    "transient_environment": false,
    "production_environment": false
}';

    /**
     * ref: The ref to deploy. This can be a branch, tag, or SHA.
     * task: Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).
     * autoMerge: Attempts to automatically merge the default branch into the requested ref, if it's behind the default branch.
     * requiredContexts: The [status](https://docs.github.com/enterprise-server@3.15/rest/commits/statuses) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts.
     * environment: Name for the target deployment environment (e.g., `production`, `staging`, `qa`).
     * description: Short description of the deployment.
     * transientEnvironment: Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`
     * productionEnvironment: Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise.
     */
    public function __construct(public string $ref, public string|null $task, #[MapFrom('auto_merge')]
    public bool|null $autoMerge, #[MapFrom('required_contexts')]
    public array|null $requiredContexts, #[Payload]
    public Schema\Repos\CreateDeployment\Request\ApplicationJson\Payload\Zero|string|null $payload, public string|null $environment, public string|null $description, #[MapFrom('transient_environment')]
    public bool|null $transientEnvironment, #[MapFrom('production_environment')]
    public bool|null $productionEnvironment,)
    {
    }
}
