<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","runner_groups"],"type":"object","properties":{"total_count":{"type":"number"},"runner_groups":{"type":"array","items":{"required":["id","name","visibility","default","runners_url","inherited","allows_public_repositories"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_repositories_url":{"type":"string","description":"Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`"},"runners_url":{"type":"string"},"inherited":{"type":"boolean"},"inherited_allows_public_repositories":{"type":"boolean"},"allows_public_repositories":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"runner_groups":[{"id":13,"name":"generated_name","visibility":"generated_visibility","default":false,"selected_repositories_url":"generated_selected_repositories_url","runners_url":"generated_runners_url","inherited":false,"inherited_allows_public_repositories":false,"allows_public_repositories":false}]}';
    public ?int $total_count;
    /**
     * @var array<Schema\RunnerGroupsOrg>
     */
    public ?array $runner_groups;
    public function __construct(int $total_count, array $runner_groups)
    {
        $this->total_count = $total_count;
        $this->runner_groups = $runner_groups;
    }
}
