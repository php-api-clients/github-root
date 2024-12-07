<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T816635D3\TC55238BA\TBF74F2E8;

abstract readonly class T24A1EBA4 implements \ApiClients\Client\GitHub\Contract\WebhookDeploymentCreated\WorkflowRun\ReferencedWorkflows
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "path": "generated",
    "ref": "generated",
    "sha": "generated"
}';
    public function __construct(public string $path, public ?string $ref, public string $sha)
    {
    }
}
