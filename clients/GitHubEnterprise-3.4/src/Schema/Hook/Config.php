<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Hook;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Config
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "email": {
            "type": "string",
            "examples": [
                "\\"foo@bar.com\\""
            ]
        },
        "password": {
            "type": "string",
            "examples": [
                "\\"foo\\""
            ]
        },
        "room": {
            "type": "string",
            "examples": [
                "\\"roomer\\""
            ]
        },
        "subdomain": {
            "type": "string",
            "examples": [
                "\\"foo\\""
            ]
        },
        "url": {
            "type": "string",
            "description": "The URL to which the payloads will be delivered.",
            "format": "uri",
            "examples": [
                "https:\\/\\/example.com\\/webhook"
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
        "content_type": {
            "type": "string",
            "description": "The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.",
            "examples": [
                "\\"json\\""
            ]
        },
        "digest": {
            "type": "string",
            "examples": [
                "\\"sha256\\""
            ]
        },
        "secret": {
            "type": "string",
            "description": "If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/enterprise-server@3.4\\/webhooks\\/event-payloads\\/#delivery-headers).",
            "examples": [
                "\\"********\\""
            ]
        },
        "token": {
            "type": "string",
            "examples": [
                "\\"abc\\""
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "email": "\\"foo@bar.com\\"",
    "password": "\\"foo\\"",
    "room": "\\"roomer\\"",
    "subdomain": "\\"foo\\"",
    "url": "https:\\/\\/example.com\\/webhook",
    "insecure_ssl": null,
    "content_type": "\\"json\\"",
    "digest": "\\"sha256\\"",
    "secret": "\\"********\\"",
    "token": "\\"abc\\""
}';

    /**
     * url: The URL to which the payloads will be delivered.
     * contentType: The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     * secret: If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/enterprise-server@3.4/webhooks/event-payloads/#delivery-headers).
     */
    public function __construct(public string|null $email, public string|null $password, public string|null $room, public string|null $subdomain, public string|null $url, #[MapFrom('insecure_ssl')]
    public string|int|float|null $insecureSsl, #[MapFrom('content_type')]
    public string|null $contentType, public string|null $digest, public string|null $secret, public string|null $token,)
    {
    }
}
