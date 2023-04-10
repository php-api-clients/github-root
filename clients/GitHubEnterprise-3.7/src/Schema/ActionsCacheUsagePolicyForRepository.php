<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ActionsCacheUsagePolicyForRepository
{
    public const SCHEMA_JSON = '{"title":"Actions cache usage policy for repository","required":["repo_cache_size_limit_in_gb"],"type":"object","properties":{"repo_cache_size_limit_in_gb":{"type":"integer","description":"The size limit for the sum of all caches, in gigabytes.","examples":[14]}},"description":"GitHub Actions cache usage policy for repository."}';
    public const SCHEMA_TITLE = 'Actions cache usage policy for repository';
    public const SCHEMA_DESCRIPTION = 'GitHub Actions cache usage policy for repository.';
    public const SCHEMA_EXAMPLE_DATA = '{"repo_cache_size_limit_in_gb":14}';
    /**
     * repoCacheSizeLimitInGb: The size limit for the sum of all caches, in gigabytes.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('repo_cache_size_limit_in_gb')] public int $repoCacheSizeLimitInGb)
    {
    }
}
