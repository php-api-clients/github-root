<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\PostManageRunConfigApply\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "run_id": {
            "type": "string",
            "description": "The run ID to execute `ghe-config-apply` with. If not provided, a run ID will be generated randomly."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "run_id": "generated"
}';

    /**
     * runId: The run ID to execute `ghe-config-apply` with. If not provided, a run ID will be generated randomly.
     */
    public function __construct(#[MapFrom('run_id')]
    public string|null $runId,)
    {
    }
}
