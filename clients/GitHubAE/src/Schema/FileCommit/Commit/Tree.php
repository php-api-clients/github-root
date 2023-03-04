<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\FileCommit\Commit;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Tree
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","sha":"generated_sha"}';
    public ?string $url;
    public ?string $sha;
    public function __construct(string $url, string $sha)
    {
        $this->url = $url;
        $this->sha = $sha;
    }
}
