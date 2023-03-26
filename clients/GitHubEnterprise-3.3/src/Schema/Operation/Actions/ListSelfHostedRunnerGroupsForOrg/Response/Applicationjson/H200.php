<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","runner_groups"],"type":"object","properties":{"total_count":{"type":"number"},"runner_groups":{"type":"array","items":{"required":["id","name","visibility","default","runners_url","inherited","allows_public_repositories"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_repositories_url":{"type":"string","description":"Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`"},"runners_url":{"type":"string"},"inherited":{"type":"boolean"},"inherited_allows_public_repositories":{"type":"boolean"},"allows_public_repositories":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"runner_groups":[{"id":13,"name":"generated_name_null","visibility":"generated_visibility_null","default":false,"selected_repositories_url":"generated_selected_repositories_url_null","runners_url":"generated_runners_url_null","inherited":false,"inherited_allows_public_repositories":false,"allows_public_repositories":false}]}';
    /**
     * @param array<\ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg> $runnerGroups
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, #[\EventSauce\ObjectHydrator\MapFrom('runner_groups')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\RunnerGroupsOrg::class)] public array $runnerGroups)
    {
    }
}
