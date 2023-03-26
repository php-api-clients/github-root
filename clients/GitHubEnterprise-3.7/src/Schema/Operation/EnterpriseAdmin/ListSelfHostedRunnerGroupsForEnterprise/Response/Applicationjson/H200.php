<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","runner_groups"],"type":"object","properties":{"total_count":{"type":"number"},"runner_groups":{"type":"array","items":{"required":["id","name","visibility","allows_public_repositories","default","runners_url"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_organizations_url":{"type":"string"},"runners_url":{"type":"string"},"allows_public_repositories":{"type":"boolean"},"workflow_restrictions_read_only":{"type":"boolean","description":"If `true`, the `restricted_to_workflows` and `selected_workflows` fields cannot be modified.","default":false},"restricted_to_workflows":{"type":"boolean","description":"If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.","default":false},"selected_workflows":{"type":"array","items":{"type":"string","description":"Name of workflow the runner group should be allowed to run. Note that a ref, tag, or long SHA is required.","examples":["octo-org\\/octo-repo\\/.github\\/workflows\\/deploy.yaml@main"]},"description":"List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`."}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"runner_groups":[{"id":13,"name":"generated_name_null","visibility":"generated_visibility_null","default":false,"selected_organizations_url":"generated_selected_organizations_url_null","runners_url":"generated_runners_url_null","allows_public_repositories":false,"workflow_restrictions_read_only":false,"restricted_to_workflows":false,"selected_workflows":["generated_selected_workflows_null"]}]}';
    /**
     * @param array<\ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise> $runnerGroups
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, #[\EventSauce\ObjectHydrator\MapFrom('runner_groups')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\RunnerGroupsEnterprise::class)] public array $runnerGroups)
    {
    }
}
