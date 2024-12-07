<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class DeploymentReviewerType implements \ApiClients\Client\GitHub\Contract\DeploymentReviewerType
{
    const SCHEMA_JSON = '{
    "enum": [
        "User",
        "Team"
    ],
    "type": "string",
    "description": "The type of reviewer.",
    "examples": [
        "User"
    ]
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The type of reviewer.';
    const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
