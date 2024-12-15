<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesLicenseCheck
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "status": {
            "enum": [
                "valid",
                "invalid",
                "expired",
                "cluster mode not supported"
            ],
            "type": "string",
            "description": "The license status of the currently active enterprise license."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "cluster mode not supported"
}';

    /**
     * status: The license status of the currently active enterprise license.
     */
    public function __construct(public string|null $status)
    {
    }
}
