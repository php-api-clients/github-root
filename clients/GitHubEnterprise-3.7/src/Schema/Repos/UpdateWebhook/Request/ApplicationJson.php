<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\UpdateWebhook\Request;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "config": {
            "required": [
                "url"
            ],
            "type": "object",
            "properties": {
                "url": {
                    "type": "string",
                    "description": "The URL to which the payloads will be delivered.",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/example.com\\/webhook"
                    ]
                },
                "content_type": {
                    "type": "string",
                    "description": "The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.",
                    "examples": [
                        "\\"json\\""
                    ]
                },
                "secret": {
                    "type": "string",
                    "description": "If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/webhooks\\/event-payloads\\/#delivery-headers).",
                    "examples": [
                        "\\"********\\""
                    ]
                },
                "insecure_ssl": {
                    "oneOf": [
                        {
                            "type": "string",
                            "description": "Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**",
                            "examples": [
                                "\\"0\\""
                            ]
                        },
                        {
                            "type": "number"
                        }
                    ]
                },
                "address": {
                    "type": "string",
                    "examples": [
                        "\\"bar@example.com\\""
                    ]
                },
                "room": {
                    "type": "string",
                    "examples": [
                        "\\"The Serious Room\\""
                    ]
                }
            },
            "description": "Key\\/value pairs to provide settings for this webhook."
        },
        "events": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Determines what [events](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/webhooks\\/event-payloads) the hook is triggered for. This replaces the entire array of events.",
            "default": [
                "push"
            ]
        },
        "add_events": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Determines a list of events to be added to the list of events that the Hook triggers for."
        },
        "remove_events": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Determines a list of events to be removed from the list of events that the Hook triggers for."
        },
        "active": {
            "type": "boolean",
            "description": "Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.",
            "default": true
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "config": {
        "url": "https:\\/\\/example.com\\/webhook",
        "content_type": "\\"json\\"",
        "secret": "\\"********\\"",
        "insecure_ssl": null,
        "address": "\\"bar@example.com\\"",
        "room": "\\"The Serious Room\\""
    },
    "events": [
        "generated",
        "generated"
    ],
    "add_events": [
        "generated",
        "generated"
    ],
    "remove_events": [
        "generated",
        "generated"
    ],
    "active": false
}';

    /**
     * config: Key/value pairs to provide settings for this webhook.
     * events: Determines what [events](https://docs.github.com/enterprise-server@3.7/webhooks/event-payloads) the hook is triggered for. This replaces the entire array of events.
     * addEvents: Determines a list of events to be added to the list of events that the Hook triggers for.
     * removeEvents: Determines a list of events to be removed from the list of events that the Hook triggers for.
     * active: Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public function __construct(public Schema\Repos\UpdateWebhook\Request\ApplicationJson\Config|null $config, public array|null $events, #[MapFrom('add_events')]
    public array|null $addEvents, #[MapFrom('remove_events')]
    public array|null $removeEvents, public bool|null $active,)
    {
    }
}
