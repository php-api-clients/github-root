<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\GlobalHook2;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"content_type":{"type":"string"},"insecure_ssl":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","content_type":"generated_content_type","insecure_ssl":"generated_insecure_ssl"}';
    public function __construct(public ?string $url, public ?string $content_type, public ?string $insecure_ssl)
    {
    }
}
