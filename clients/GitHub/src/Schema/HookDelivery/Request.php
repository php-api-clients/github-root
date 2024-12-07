<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\HookDelivery;

use ApiClients\Client\GitHub\Schema\HookDelivery\Request\Headers;
use ApiClients\Client\GitHub\Schema\HookDelivery\Request\Payload;

final readonly class Request implements \ApiClients\Client\GitHub\Contract\HookDelivery\Request
{
    public const SCHEMA_JSON         = '{
    "required": [
        "headers",
        "payload"
    ],
    "type": "object",
    "properties": {
        "headers": {
            "type": [
                "object",
                "null"
            ],
            "description": "The request headers sent with the webhook delivery.",
            "additionalProperties": true
        },
        "payload": {
            "type": [
                "object",
                "null"
            ],
            "description": "The webhook payload.",
            "additionalProperties": true
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "headers": [],
    "payload": []
}';

    /**
     * headers: The request headers sent with the webhook delivery.
     * payload: The webhook payload.
     */
    public function __construct(public Headers|null $headers, public Payload|null $payload)
    {
    }
}
