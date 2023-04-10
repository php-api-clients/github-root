<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ActionsCacheUsagePolicyEnterprise
{
    public const SCHEMA_JSON = '{"title":"Actions cache usage policy for an enterprise","type":"object","properties":{"repo_cache_size_limit_in_gb":{"type":"integer","description":"For repositories in an enterprise, the default size limit for the sum of all caches in a repository, in gigabytes.","examples":[10]},"max_repo_cache_size_limit_in_gb":{"type":"integer","description":"For repositories in an enterprise, the maximum value that can be set as the limit for the sum of all caches in a repository, in gigabytes.","examples":[15]}},"description":"GitHub Actions cache usage policy for an enterprise."}';
    public const SCHEMA_TITLE = 'Actions cache usage policy for an enterprise';
    public const SCHEMA_DESCRIPTION = 'GitHub Actions cache usage policy for an enterprise.';
    public const SCHEMA_EXAMPLE_DATA = '{"repo_cache_size_limit_in_gb":10,"max_repo_cache_size_limit_in_gb":15}';
    /**
     * repoCacheSizeLimitInGb: For repositories in an enterprise, the default size limit for the sum of all caches in a repository, in gigabytes.
     * maxRepoCacheSizeLimitInGb: For repositories in an enterprise, the maximum value that can be set as the limit for the sum of all caches in a repository, in gigabytes.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('repo_cache_size_limit_in_gb')] public ?int $repoCacheSizeLimitInGb, #[\EventSauce\ObjectHydrator\MapFrom('max_repo_cache_size_limit_in_gb')] public ?int $maxRepoCacheSizeLimitInGb)
    {
    }
}
