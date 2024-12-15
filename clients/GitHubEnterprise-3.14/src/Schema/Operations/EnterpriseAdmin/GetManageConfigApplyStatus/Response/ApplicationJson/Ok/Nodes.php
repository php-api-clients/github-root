<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\GetManageConfigApplyStatus\Response\ApplicationJson\Ok;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Nodes
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "run_id": "generated",
    "hostname": "generated",
    "running": false,
    "successful": false
}';

    /**
     * runId: The unique Run ID of the ghe-config-apply run on the host
     * hostname: The hostname of the node
     * running: Whether the ghe-config-apply run is still running on the host
     * successful: Whether the ghe-config-apply run was successful on the host
     */
    public function __construct(#[MapFrom('run_id')]
    public string|null $runId, public string|null $hostname, public bool|null $running, public bool|null $successful,)
    {
    }
}
