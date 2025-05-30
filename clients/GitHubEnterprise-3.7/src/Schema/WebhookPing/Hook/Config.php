<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookPing\Hook;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Config
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "content_type": {
            "type": "string",
            "description": "The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.",
            "examples": [
                "\\"json\\""
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
        "secret": {
            "type": "string",
            "description": "If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/webhooks\\/event-payloads\\/#delivery-headers).",
            "examples": [
                "\\"********\\""
            ]
        },
        "url": {
            "type": "string",
            "description": "The URL to which the payloads will be delivered.",
            "format": "uri",
            "examples": [
                "https:\\/\\/example.com\\/webhook"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "content_type": "\\"json\\"",
    "insecure_ssl": null,
    "secret": "\\"********\\"",
    "url": "https:\\/\\/example.com\\/webhook"
}';

    /**
     * contentType: The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     * secret: If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/enterprise-server@3.7/webhooks/event-payloads/#delivery-headers).
     * url: The URL to which the payloads will be delivered.
     */
    public function __construct(#[MapFrom('content_type')]
    public string|null $contentType, #[MapFrom('insecure_ssl')]
    public string|int|float|null $insecureSsl, public string|null $secret, public string|null $url,)
    {
    }
}
