<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class GithubSsl
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean"},"cert":{"type":["string","null"]},"key":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"cert":"generated_cert","key":"generated_key"}';
    public ?bool $enabled;
    public ?string $cert;
    public ?string $key;
    public function __construct(bool $enabled, string $cert, string $key)
    {
        $this->enabled = $enabled;
        $this->cert = $cert;
        $this->key = $key;
    }
}
