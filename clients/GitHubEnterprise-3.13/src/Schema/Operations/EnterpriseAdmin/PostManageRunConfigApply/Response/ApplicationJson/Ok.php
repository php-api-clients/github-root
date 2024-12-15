<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "run_id": {
            "type": "string",
            "description": "Run ID the job was launched with"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "run_id": "generated"
}';

    /**
     * runId: Run ID the job was launched with
     */
    public function __construct(#[MapFrom('run_id')]
    public string|null $runId,)
    {
    }
}
