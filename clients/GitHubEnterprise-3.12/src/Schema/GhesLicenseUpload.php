<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesLicenseUpload
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "output": {
            "type": "string",
            "description": "The output of the license upload command."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "output": "generated"
}';

    /**
     * output: The output of the license upload command.
     */
    public function __construct(public string|null $output)
    {
    }
}
