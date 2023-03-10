<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"content_type":{"type":"string"},"insecure_ssl":{"type":"string"},"secret":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","content_type":"generated_content_type","insecure_ssl":"generated_insecure_ssl","secret":"generated_secret"}';
    public function __construct(public ?string $url, public ?string $content_type, public ?string $insecure_ssl, public ?string $secret)
    {
    }
}
