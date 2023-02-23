<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class PullRequestMergeResult
{
    public const SCHEMA_JSON = '{"title":"Pull Request Merge Result","required":["merged","message","sha"],"type":"object","properties":{"sha":{"type":"string"},"merged":{"type":"boolean"},"message":{"type":"string"}},"description":"Pull Request Merge Result"}';
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SCHEMA_DESCRIPTION = 'Pull Request Merge Result';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated_sha","merged":false,"message":"generated_message"}';
    public ?string $sha;
    public ?bool $merged;
    public ?string $message;
    public function __construct(string $sha, bool $merged, string $message)
    {
        $this->sha = $sha;
        $this->merged = $merged;
        $this->message = $message;
    }
}
