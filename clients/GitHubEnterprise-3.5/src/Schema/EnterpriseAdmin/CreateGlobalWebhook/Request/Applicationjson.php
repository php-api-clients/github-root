<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\CreateGlobalWebhook\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name","config"],"type":"object","properties":{"name":{"type":"string","description":"Must be passed as \\"web\\"."},"config":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered."},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`."},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https:\\/\\/docs.github.com\\/enterprise-server@3.5\\/webhooks\\/event-payloads\\/#delivery-headers) header."},"insecure_ssl":{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**"}},"description":"Key\\/value pairs to provide settings for this webhook."},"events":{"type":"array","items":{"type":"string"},"description":"The [events](https:\\/\\/docs.github.com\\/enterprise-server@3.5\\/webhooks\\/event-payloads) that trigger this webhook. A global webhook can be triggered by `user` and `organization` events. Default: `user` and `organization`."},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","config":{"url":"generated_url","content_type":"generated_content_type","secret":"generated_secret","insecure_ssl":"generated_insecure_ssl"},"events":[null],"active":false}';
    /**
     * Must be passed as "web".
     */
    public ?string $name;
    /**
     * Key/value pairs to provide settings for this webhook.
     */
    public ?Schema\EnterpriseAdmin\CreateGlobalWebhook\Request\Applicationjson\Config $config;
    /**
     * The [events](https://docs.github.com/enterprise-server@3.5/webhooks/event-payloads) that trigger this webhook. A global webhook can be triggered by `user` and `organization` events. Default: `user` and `organization`.
     * @var array<string>
     */
    public array $events;
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public bool $active;
    public function __construct(string $name, Schema\EnterpriseAdmin\CreateGlobalWebhook\Request\Applicationjson\Config $config, array $events, bool $active)
    {
        $this->name = $name;
        $this->config = $config;
        $this->events = $events;
        $this->active = $active;
    }
}
