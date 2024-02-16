<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesDeleteSshResponse
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "hostname": {
            "type": "string",
            "description": "Hostname of the node where the SSH key was removed.",
            "format": "hostname"
        },
        "uuid": {
            "type": "string",
            "description": "UUID of the SSH key that was removed.",
            "format": "uuid"
        },
        "message": {
            "type": "string",
            "description": "Message indicating the result of the SSH key removal."
        },
        "error": {
            "type": "string",
            "description": "Error message indicating the reason for the SSH key removal failure. This field is only present if the SSH key removal failed."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "hostname": "generated",
    "uuid": "4ccda740-74c3-4cfa-8571-ebf83c8f300a",
    "message": "generated",
    "error": "generated"
}';

    /**
     * hostname: Hostname of the node where the SSH key was removed.
     * uuid: UUID of the SSH key that was removed.
     * message: Message indicating the result of the SSH key removal.
     * error: Error message indicating the reason for the SSH key removal failure. This field is only present if the SSH key removal failed.
     */
    public function __construct(public string|null $hostname, public string|null $uuid, public string|null $message, public string|null $error)
    {
    }
}
