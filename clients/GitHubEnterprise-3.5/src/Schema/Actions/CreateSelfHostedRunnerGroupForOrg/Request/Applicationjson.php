<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Actions\CreateSelfHostedRunnerGroupForOrg\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the runner group."},"visibility":{"enum":["selected","all","private"],"type":"string","description":"Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.","default":"all"},"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"List of repository IDs that can access the runner group."},"runners":{"type":"array","items":{"type":"integer","description":"Unique identifier of the runner."},"description":"List of runner IDs to add to the runner group."},"allows_public_repositories":{"type":"boolean","description":"Whether the runner group can be used by `public` repositories.","default":false},"restricted_to_workflows":{"type":"boolean","description":"If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.","default":false},"selected_workflows":{"type":"array","items":{"type":"string","description":"Name of workflow the runner group should be allowed to run. Note that a ref, tag, or long SHA is required.","examples":["octo-org\\/octo-repo\\/.github\\/workflows\\/deploy.yaml@main"]},"description":"List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","visibility":"selected","selected_repository_ids":[13],"runners":[13],"allows_public_repositories":false,"restricted_to_workflows":false,"selected_workflows":["generated_selected_workflows_null"]}';
    /**
     * name: Name of the runner group.
     * visibility: Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.
     * selectedRepositoryIds: List of repository IDs that can access the runner group.
     * @param ?array<int> $selectedRepositoryIds
     * runners: List of runner IDs to add to the runner group.
     * @param ?array<int> $runners
     * allowsPublicRepositories: Whether the runner group can be used by `public` repositories.
     * restrictedToWorkflows: If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.
     * selectedWorkflows: List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`.
     * @param ?array<string> $selectedWorkflows
     */
    public function __construct(public string $name, public ?string $visibility, #[\EventSauce\ObjectHydrator\MapFrom('selected_repository_ids')] public ?array $selectedRepositoryIds, public ?array $runners, #[\EventSauce\ObjectHydrator\MapFrom('allows_public_repositories')] public ?bool $allowsPublicRepositories, #[\EventSauce\ObjectHydrator\MapFrom('restricted_to_workflows')] public ?bool $restrictedToWorkflows, #[\EventSauce\ObjectHydrator\MapFrom('selected_workflows')] public ?array $selectedWorkflows)
    {
    }
}
