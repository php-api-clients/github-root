<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\CreateGlobalWebhook\Request\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered."},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`."},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https:\\/\\/docs.github.com\\/enterprise-server@3.5\\/webhooks\\/event-payloads\\/#delivery-headers) header."},"insecure_ssl":{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**"}},"description":"Key\\/value pairs to provide settings for this webhook."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Key/value pairs to provide settings for this webhook.';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","content_type":"generated_content_type","secret":"generated_secret","insecure_ssl":"generated_insecure_ssl"}';
    /**
     * The URL to which the payloads will be delivered.
     */
    public ?string $url;
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     */
    public string $content_type;
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https://docs.github.com/enterprise-server@3.5/webhooks/event-payloads/#delivery-headers) header.
     */
    public string $secret;
    /**
     * Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**
     */
    public string $insecure_ssl;
    public function __construct(string $url, string $content_type, string $secret, string $insecure_ssl)
    {
        $this->url = $url;
        $this->content_type = $content_type;
        $this->secret = $secret;
        $this->insecure_ssl = $insecure_ssl;
    }
}
