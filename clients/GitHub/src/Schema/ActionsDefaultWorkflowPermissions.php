<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class ActionsDefaultWorkflowPermissions
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "read",
        "write"
    ],
    "type": "string",
    "description": "The default workflow permissions granted to the GITHUB_TOKEN when running workflows."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The default workflow permissions granted to the GITHUB_TOKEN when running workflows.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
