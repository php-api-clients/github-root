<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookMetaDeleted\Hook;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"required":["content_type","insecure_ssl","url"],"type":"object","properties":{"content_type":{"enum":["json","form"],"type":"string"},"insecure_ssl":{"type":"string"},"secret":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content_type":"generated_content_type","insecure_ssl":"generated_insecure_ssl","secret":"generated_secret","url":"generated_url"}';
    public ?string $content_type;
    public ?string $insecure_ssl;
    public string $secret;
    public ?string $url;
    public function __construct(string $content_type, string $insecure_ssl, string $secret, string $url)
    {
        $this->content_type = $content_type;
        $this->insecure_ssl = $insecure_ssl;
        $this->secret = $secret;
        $this->url = $url;
    }
}
