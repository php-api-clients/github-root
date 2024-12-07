<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema\HookDelivery\Request;
use ApiClients\Client\GitHub\Schema\HookDelivery\Response;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class HookDelivery implements \ApiClients\Client\GitHub\Contract\HookDelivery
{
    public const SCHEMA_JSON         = '{
    "title": "Webhook delivery",
    "required": [
        "id",
        "guid",
        "delivered_at",
        "redelivery",
        "duration",
        "status",
        "status_code",
        "event",
        "action",
        "installation_id",
        "repository_id",
        "request",
        "response"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "Unique identifier of the delivery.",
            "examples": [
                42
            ]
        },
        "guid": {
            "type": "string",
            "description": "Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).",
            "examples": [
                "58474f00-b361-11eb-836d-0e4f3503ccbe"
            ]
        },
        "delivered_at": {
            "type": "string",
            "description": "Time when the delivery was delivered.",
            "format": "date-time",
            "examples": [
                "2021-05-12T20:33:44Z"
            ]
        },
        "redelivery": {
            "type": "boolean",
            "description": "Whether the delivery is a redelivery.",
            "examples": [
                false
            ]
        },
        "duration": {
            "type": "number",
            "description": "Time spent delivering.",
            "examples": [
                0.03
            ]
        },
        "status": {
            "type": "string",
            "description": "Description of the status of the attempted delivery",
            "examples": [
                "failed to connect"
            ]
        },
        "status_code": {
            "type": "integer",
            "description": "Status code received when delivery was made.",
            "examples": [
                502
            ]
        },
        "event": {
            "type": "string",
            "description": "The event that triggered the delivery.",
            "examples": [
                "issues"
            ]
        },
        "action": {
            "type": [
                "string",
                "null"
            ],
            "description": "The type of activity for the event that triggered the delivery.",
            "examples": [
                "opened"
            ]
        },
        "installation_id": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The id of the GitHub App installation associated with this event.",
            "examples": [
                123
            ]
        },
        "repository_id": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The id of the repository associated with this event.",
            "examples": [
                123
            ]
        },
        "throttled_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "Time when the webhook delivery was throttled.",
            "format": "date-time",
            "examples": [
                "2021-05-12T20:33:44Z"
            ]
        },
        "url": {
            "type": "string",
            "description": "The URL target of the delivery.",
            "examples": [
                "https:\\/\\/www.example.com"
            ]
        },
        "request": {
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
        },
        "response": {
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
                    "description": "The response headers received when the delivery was made.",
                    "additionalProperties": true
                },
                "payload": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The response payload received.",
                    "additionalProperties": true
                }
            }
        }
    },
    "description": "Delivery made by a webhook."
}';
    public const SCHEMA_TITLE        = 'Webhook delivery';
    public const SCHEMA_DESCRIPTION  = 'Delivery made by a webhook.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "guid": "generated",
    "delivered_at": "1970-01-01T00:00:00+00:00",
    "redelivery": false,
    "duration": 8,
    "status": "generated",
    "status_code": 11,
    "event": "generated",
    "action": "generated",
    "installation_id": 15,
    "repository_id": 13,
    "throttled_at": "1970-01-01T00:00:00+00:00",
    "url": "generated",
    "request": {
        "headers": [],
        "payload": []
    },
    "response": {
        "headers": [],
        "payload": "generated"
    }
}';

    /**
     * id: Unique identifier of the delivery.
     * guid: Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).
     * deliveredAt: Time when the delivery was delivered.
     * redelivery: Whether the delivery is a redelivery.
     * duration: Time spent delivering.
     * status: Description of the status of the attempted delivery
     * statusCode: Status code received when delivery was made.
     * event: The event that triggered the delivery.
     * action: The type of activity for the event that triggered the delivery.
     * installationId: The id of the GitHub App installation associated with this event.
     * repositoryId: The id of the repository associated with this event.
     * throttledAt: Time when the webhook delivery was throttled.
     * url: The URL target of the delivery.
     */
    public function __construct(public int $id, public string $guid, #[MapFrom('delivered_at')]
    public string $deliveredAt, public bool $redelivery, public int|float $duration, public string $status, #[MapFrom('status_code')]
    public int $statusCode, public string $event, public string|null $action, #[MapFrom('installation_id')]
    public int|null $installationId, #[MapFrom('repository_id')]
    public int|null $repositoryId, #[MapFrom('throttled_at')]
    public string|null $throttledAt, public string|null $url, public Request $request, public Response $response,)
    {
    }
}
