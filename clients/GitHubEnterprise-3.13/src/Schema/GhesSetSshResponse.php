<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesSetSshResponse
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "hostname": {
            "type": "string",
            "description": "Hostname of the node where the SSH key was added.",
            "format": "hostname"
        },
        "uuid": {
            "type": "string",
            "description": "UUID of the SSH key that was added.",
            "format": "uuid"
        },
        "message": {
            "type": "string",
            "description": "Message indicating the result of the SSH key addition."
        },
        "error": {
            "type": "string",
            "description": "Error message indicating the reason for the SSH key addition failure. This field is only present if the SSH key addition failed."
        },
        "modified": {
            "type": "boolean",
            "description": "Whether the SSH key was already present on the `authorized_keys` file."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "hostname": "generated",
    "uuid": "4ccda740-74c3-4cfa-8571-ebf83c8f300a",
    "message": "generated",
    "error": "generated",
    "modified": false
}';

    /**
     * hostname: Hostname of the node where the SSH key was added.
     * uuid: UUID of the SSH key that was added.
     * message: Message indicating the result of the SSH key addition.
     * error: Error message indicating the reason for the SSH key addition failure. This field is only present if the SSH key addition failed.
     * modified: Whether the SSH key was already present on the `authorized_keys` file.
     */
    public function __construct(public string|null $hostname, public string|null $uuid, public string|null $message, public string|null $error, public bool|null $modified)
    {
    }
}
