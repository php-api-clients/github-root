<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Hook;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string","examples":["\\"foo@bar.com\\""]},"password":{"type":"string","examples":["\\"foo\\""]},"room":{"type":"string","examples":["\\"roomer\\""]},"subdomain":{"type":"string","examples":["\\"foo\\""]},"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"digest":{"type":"string","examples":["\\"sha256\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"token":{"type":"string","examples":["\\"abc\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"email":"\\"foo@bar.com\\"","password":"\\"foo\\"","room":"\\"roomer\\"","subdomain":"\\"foo\\"","url":"https:\\/\\/example.com\\/webhook","insecure_ssl":13,"content_type":"\\"json\\"","digest":"\\"sha256\\"","secret":"\\"********\\"","token":"\\"abc\\""}';
    public ?string $email;
    public ?string $password;
    public ?string $room;
    public ?string $subdomain;
    /**
     * The URL to which the payloads will be delivered.
     */
    public ?string $url;
    public ?int $insecure_ssl;
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     */
    public ?string $content_type;
    public ?string $digest;
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/enterprise-server@3.1/webhooks/event-payloads/#delivery-headers).
     */
    public ?string $secret;
    public ?string $token;
    public function __construct(string $email, string $password, string $room, string $subdomain, string $url, int $insecure_ssl, string $content_type, string $digest, string $secret, string $token)
    {
        $this->email = $email;
        $this->password = $password;
        $this->room = $room;
        $this->subdomain = $subdomain;
        $this->url = $url;
        $this->insecure_ssl = $insecure_ssl;
        $this->content_type = $content_type;
        $this->digest = $digest;
        $this->secret = $secret;
        $this->token = $token;
    }
}
