<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class EnterpriseRepositoryOverview
{
    public const SCHEMA_JSON = '{"title":"Repository Enterprise Stats","required":["total_repos","root_repos","fork_repos","org_repos","total_pushes","total_wikis"],"type":"object","properties":{"total_repos":{"type":"integer"},"root_repos":{"type":"integer"},"fork_repos":{"type":"integer"},"org_repos":{"type":"integer"},"total_pushes":{"type":"integer"},"total_wikis":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Repository Enterprise Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_repos":13,"root_repos":13,"fork_repos":13,"org_repos":13,"total_pushes":13,"total_wikis":13}';
    public function __construct(public ?int $total_repos, public ?int $root_repos, public ?int $fork_repos, public ?int $org_repos, public ?int $total_pushes, public ?int $total_wikis)
    {
    }
}
