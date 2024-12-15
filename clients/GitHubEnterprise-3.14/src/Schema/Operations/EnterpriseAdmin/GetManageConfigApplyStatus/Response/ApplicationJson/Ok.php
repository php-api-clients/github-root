<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\GetManageConfigApplyStatus\Response\ApplicationJson;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "running": {
            "type": "boolean",
            "description": "Whether the ghe-config-apply run is still running in the environment"
        },
        "successful": {
            "type": "boolean",
            "description": "Whether the ghe-config-apply run was successful in the environment"
        },
        "nodes": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "run_id": {
                        "type": "string",
                        "description": "The unique Run ID of the ghe-config-apply run on the host"
                    },
                    "hostname": {
                        "type": "string",
                        "description": "The hostname of the node"
                    },
                    "running": {
                        "type": "boolean",
                        "description": "Whether the ghe-config-apply run is still running on the host"
                    },
                    "successful": {
                        "type": "boolean",
                        "description": "Whether the ghe-config-apply run was successful on the host"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "running": false,
    "successful": false,
    "nodes": [
        {
            "run_id": "generated",
            "hostname": "generated",
            "running": false,
            "successful": false
        },
        {
            "run_id": "generated",
            "hostname": "generated",
            "running": false,
            "successful": false
        }
    ]
}';

    /**
     * running: Whether the ghe-config-apply run is still running in the environment
     * successful: Whether the ghe-config-apply run was successful in the environment
     */
    public function __construct(public bool|null $running, public bool|null $successful, public array|null $nodes)
    {
    }
}
