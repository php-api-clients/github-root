<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Orgs\CreateWebhook\Request;

use ApiClients\Client\GitHubEnterprise\Schema;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "config"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "Must be passed as \\"web\\"."
        },
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
                    "description": "If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/enterprise-server@3.14\\/webhooks\\/event-payloads\\/#delivery-headers).",
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
                "username": {
                    "type": "string",
                    "examples": [
                        "\\"kdaigle\\""
                    ]
                },
                "password": {
                    "type": "string",
                    "examples": [
                        "\\"password\\""
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
            "description": "Determines what [events](https:\\/\\/docs.github.com\\/enterprise-server@3.14\\/webhooks\\/event-payloads) the hook is triggered for. Set to `[\\"*\\"]` to receive all possible events.",
            "default": [
                "push"
            ]
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
    "name": "generated",
    "config": {
        "url": "https:\\/\\/example.com\\/webhook",
        "content_type": "\\"json\\"",
        "secret": "\\"********\\"",
        "insecure_ssl": null,
        "username": "\\"kdaigle\\"",
        "password": "\\"password\\""
    },
    "events": [
        "generated",
        "generated"
    ],
    "active": false
}';

    /**
     * name: Must be passed as "web".
     * config: Key/value pairs to provide settings for this webhook.
     * events: Determines what [events](https://docs.github.com/enterprise-server@3.14/webhooks/event-payloads) the hook is triggered for. Set to `["*"]` to receive all possible events.
     * active: Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public function __construct(public string $name, public Schema\Orgs\CreateWebhook\Request\ApplicationJson\Config $config, public array|null $events, public bool|null $active)
    {
    }
}
