<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowDispatch;

final readonly class Inputs implements \ApiClients\Client\GitHub\Contract\WebhookWorkflowDispatch\Inputs
{
    const SCHEMA_JSON = '{
    "type": [
        "object",
        "null"
    ],
    "additionalProperties": true
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
