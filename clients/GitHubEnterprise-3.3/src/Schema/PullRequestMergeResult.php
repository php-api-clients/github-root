<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class PullRequestMergeResult
{
    public const SCHEMA_JSON = '{"title":"Pull Request Merge Result","required":["merged","message","sha"],"type":"object","properties":{"sha":{"type":"string"},"merged":{"type":"boolean"},"message":{"type":"string"}},"description":"Pull Request Merge Result"}';
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SCHEMA_DESCRIPTION = 'Pull Request Merge Result';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated_sha","merged":false,"message":"generated_message"}';
    public function __construct(public string $sha, public bool $merged, public string $message)
    {
    }
}
