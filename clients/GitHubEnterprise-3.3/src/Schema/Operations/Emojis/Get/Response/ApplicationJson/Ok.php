<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\Emojis\Get\Response\ApplicationJson;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "additionalProperties": {
        "type": "string"
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
