<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","runner_groups"],"type":"object","properties":{"total_count":{"type":"number"},"runner_groups":{"type":"array","items":{"required":["id","name","visibility","allows_public_repositories","default","runners_url"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_organizations_url":{"type":"string"},"runners_url":{"type":"string"},"allows_public_repositories":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"runner_groups":[{"id":13,"name":"generated_name","visibility":"generated_visibility","default":false,"selected_organizations_url":"generated_selected_organizations_url","runners_url":"generated_runners_url","allows_public_repositories":false}]}';
    public ?int $total_count;
    /**
     * @var array<Schema\RunnerGroupsEnterprise>
     */
    public ?array $runner_groups;
    public function __construct(int $total_count, array $runner_groups)
    {
        $this->total_count = $total_count;
        $this->runner_groups = $runner_groups;
    }
}
