<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesUploadLicenseRequest
{
    public const SCHEMA_JSON         = '{
    "title": "License upload form",
    "required": [
        "license"
    ],
    "type": "object",
    "properties": {
        "license": {
            "type": "string",
            "description": "The content of your _.ghl_ license file."
        }
    }
}';
    public const SCHEMA_TITLE        = 'License upload form';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "license": "generated"
}';

    /**
     * license: The content of your _.ghl_ license file.
     */
    public function __construct(public string $license)
    {
    }
}
