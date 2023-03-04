<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class PagesSourceHash
{
    public const SCHEMA_JSON = '{"title":"Pages Source Hash","required":["branch","path"],"type":"object","properties":{"branch":{"type":"string"},"path":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"branch":"generated_branch","path":"generated_path"}';
    public ?string $branch;
    public ?string $path;
    public function __construct(string $branch, string $path)
    {
        $this->branch = $branch;
        $this->path = $path;
    }
}
