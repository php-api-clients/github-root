<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\TietE17A77B0\TietAAA21D3E\TietE07B13E3;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietE1AF8E18
{
    public const SCHEMA_JSON         = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered."},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`."},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https:\\/\\/docs.github.com\\/enterprise-server@3.4\\/webhooks\\/event-payloads\\/#delivery-headers) header."},"insecure_ssl":{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**"}},"description":"Key\\/value pairs to provide settings for this webhook."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Key/value pairs to provide settings for this webhook.';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated","content_type":"generated","secret":"generated","insecure_ssl":"generated"}';

    /**
     * url: The URL to which the payloads will be delivered.
     * contentType: The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     * secret: If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https://docs.github.com/enterprise-server@3.4/webhooks/event-payloads/#delivery-headers) header.
     * insecureSsl: Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**
     */
    public function __construct(public string $url, #[MapFrom('content_type')]
    public string|null $contentType, public string|null $secret, #[MapFrom('insecure_ssl')]
    public string|null $insecureSsl,)
    {
    }
}
