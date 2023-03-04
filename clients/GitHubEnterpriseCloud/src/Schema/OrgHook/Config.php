<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgHook;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string","examples":["\\"http:\\/\\/example.com\\/2\\""]},"insecure_ssl":{"type":"string","examples":["\\"0\\""]},"content_type":{"type":"string","examples":["\\"form\\""]},"secret":{"type":"string","examples":["\\"********\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"\\"http:\\/\\/example.com\\/2\\"","insecure_ssl":"\\"0\\"","content_type":"\\"form\\"","secret":"\\"********\\""}';
    public ?string $url;
    public ?string $insecure_ssl;
    public ?string $content_type;
    public ?string $secret;
    public function __construct(string $url, string $insecure_ssl, string $content_type, string $secret)
    {
        $this->url = $url;
        $this->insecure_ssl = $insecure_ssl;
        $this->content_type = $content_type;
        $this->secret = $secret;
    }
}
