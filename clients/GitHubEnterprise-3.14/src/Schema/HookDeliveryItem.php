<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class HookDeliveryItem
{
    public const SCHEMA_JSON         = '{
    "title": "Simple webhook delivery",
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
        "repository_id"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "Unique identifier of the webhook delivery.",
            "format": "int64",
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
            "description": "Time when the webhook delivery occurred.",
            "format": "date-time",
            "examples": [
                "2021-05-12T20:33:44Z"
            ]
        },
        "redelivery": {
            "type": "boolean",
            "description": "Whether the webhook delivery is a redelivery.",
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
            "description": "Describes the response returned after attempting the delivery.",
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
            "format": "int64",
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
            "format": "int64",
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
        }
    },
    "description": "Delivery made by a webhook, without request and response information."
}';
    public const SCHEMA_TITLE        = 'Simple webhook delivery';
    public const SCHEMA_DESCRIPTION  = 'Delivery made by a webhook, without request and response information.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 42,
    "guid": "58474f00-b361-11eb-836d-0e4f3503ccbe",
    "delivered_at": "2021-05-12T20:33:44Z",
    "redelivery": false,
    "duration": 0.03,
    "status": "failed to connect",
    "status_code": 502,
    "event": "issues",
    "action": "opened",
    "installation_id": 123,
    "repository_id": 123,
    "throttled_at": "2021-05-12T20:33:44Z"
}';

    /**
     * id: Unique identifier of the webhook delivery.
     * guid: Unique identifier for the event (shared with all deliveries for all webhooks that subscribe to this event).
     * deliveredAt: Time when the webhook delivery occurred.
     * redelivery: Whether the webhook delivery is a redelivery.
     * duration: Time spent delivering.
     * status: Describes the response returned after attempting the delivery.
     * statusCode: Status code received when delivery was made.
     * event: The event that triggered the delivery.
     * action: The type of activity for the event that triggered the delivery.
     * installationId: The id of the GitHub App installation associated with this event.
     * repositoryId: The id of the repository associated with this event.
     * throttledAt: Time when the webhook delivery was throttled.
     */
    public function __construct(public int $id, public string $guid, #[MapFrom('delivered_at')]
    public string $deliveredAt, public bool $redelivery, public int|float $duration, public string $status, #[MapFrom('status_code')]
    public int $statusCode, public string $event, public string|null $action, #[MapFrom('installation_id')]
    public int|null $installationId, #[MapFrom('repository_id')]
    public int|null $repositoryId, #[MapFrom('throttled_at')]
    public string|null $throttledAt,)
    {
    }
}
