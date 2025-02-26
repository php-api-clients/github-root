<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanning\ReviewBypassRequest\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "status",
        "message"
    ],
    "type": "object",
    "properties": {
        "status": {
            "enum": [
                "approve",
                "reject"
            ],
            "type": "string",
            "description": "The review action to perform on the bypass request."
        },
        "message": {
            "type": "string",
            "description": "A message to include with the review. Has a maximum character length of 2048."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "reject",
    "message": "generated"
}';

    /**
     * status: The review action to perform on the bypass request.
     * message: A message to include with the review. Has a maximum character length of 2048.
     */
    public function __construct(public string $status, public string $message)
    {
    }
}
