<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class WebhookCheckRunRequestedActionFormEncoded
{
    public const SCHEMA_JSON         = '{
    "title": "Check Run Requested Action Event",
    "required": [
        "payload"
    ],
    "type": "object",
    "properties": {
        "payload": {
            "type": "string",
            "description": "A URL-encoded string of the check_run.requested_action JSON payload. The decoded payload is a JSON object."
        }
    },
    "description": "The check_run.requested_action webhook encoded with URL encoding"
}';
    public const SCHEMA_TITLE        = 'Check Run Requested Action Event';
    public const SCHEMA_DESCRIPTION  = 'The check_run.requested_action webhook encoded with URL encoding';
    public const SCHEMA_EXAMPLE_DATA = '{
    "payload": "generated"
}';

    /**
     * payload: A URL-encoded string of the check_run.requested_action JSON payload. The decoded payload is a JSON object.
     */
    public function __construct(public string $payload)
    {
    }
}
