<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T816635D3\TC55238BA\TBF74F2E8;

use ApiClients\Client\GitHub\Contract\WebhookDeploymentCreated\WorkflowRun\ReferencedWorkflows;

abstract readonly class T24A1EBA4 implements ReferencedWorkflows
{
    public const SCHEMA_JSON         = '{
    "required": [
        "path",
        "sha"
    ],
    "type": "object",
    "properties": {
        "path": {
            "type": "string"
        },
        "ref": {
            "type": "string"
        },
        "sha": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "path": "generated",
    "ref": "generated",
    "sha": "generated"
}';

    public function __construct(public string $path, public string|null $ref, public string $sha)
    {
    }
}
