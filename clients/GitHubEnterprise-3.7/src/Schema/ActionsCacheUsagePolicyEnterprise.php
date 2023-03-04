<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ActionsCacheUsagePolicyEnterprise
{
    public const SCHEMA_JSON = '{"title":"Actions cache usage policy for an enterprise","type":"object","properties":{"repo_cache_size_limit_in_gb":{"type":"integer","description":"For repositories in an enterprise, the default size limit for the sum of all caches in a repository, in gigabytes.","examples":[10]},"max_repo_cache_size_limit_in_gb":{"type":"integer","description":"For repositories in an enterprise, the maximum value that can be set as the limit for the sum of all caches in a repository, in gigabytes.","examples":[15]}},"description":"GitHub Actions cache usage policy for an enterprise."}';
    public const SCHEMA_TITLE = 'Actions cache usage policy for an enterprise';
    public const SCHEMA_DESCRIPTION = 'GitHub Actions cache usage policy for an enterprise.';
    public const SCHEMA_EXAMPLE_DATA = '{"repo_cache_size_limit_in_gb":10,"max_repo_cache_size_limit_in_gb":15}';
    /**
     * For repositories in an enterprise, the default size limit for the sum of all caches in a repository, in gigabytes.
     */
    public ?int $repo_cache_size_limit_in_gb;
    /**
     * For repositories in an enterprise, the maximum value that can be set as the limit for the sum of all caches in a repository, in gigabytes.
     */
    public ?int $max_repo_cache_size_limit_in_gb;
    public function __construct(int $repo_cache_size_limit_in_gb, int $max_repo_cache_size_limit_in_gb)
    {
        $this->repo_cache_size_limit_in_gb = $repo_cache_size_limit_in_gb;
        $this->max_repo_cache_size_limit_in_gb = $max_repo_cache_size_limit_in_gb;
    }
}
