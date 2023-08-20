<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Actions\ReRunWorkflow\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
