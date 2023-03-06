<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class RunnerGroupsOrg
{
    public const SCHEMA_JSON = '{"required":["id","name","visibility","default","runners_url","inherited","allows_public_repositories"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_repositories_url":{"type":"string","description":"Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`"},"runners_url":{"type":"string"},"inherited":{"type":"boolean"},"inherited_allows_public_repositories":{"type":"boolean"},"allows_public_repositories":{"type":"boolean"},"workflow_restrictions_read_only":{"type":"boolean","description":"If `true`, the `restricted_to_workflows` and `selected_workflows` fields cannot be modified.","default":false},"restricted_to_workflows":{"type":"boolean","description":"If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.","default":false},"selected_workflows":{"type":"array","items":{"type":"string","description":"Name of workflow the runner group should be allowed to run. Note that a ref, tag, or long SHA is required.","examples":["octo-org\\/octo-repo\\/.github\\/workflows\\/deploy.yaml@main"]},"description":"List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","visibility":"generated_visibility","default":false,"selected_repositories_url":"generated_selected_repositories_url","runners_url":"generated_runners_url","inherited":false,"inherited_allows_public_repositories":false,"allows_public_repositories":false,"workflow_restrictions_read_only":false,"restricted_to_workflows":false,"selected_workflows":["generated_selected_workflows"]}';
    public ?int $id;
    public ?string $name;
    public ?string $visibility;
    public ?bool $default;
    /**
     * Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`
     */
    public string $selected_repositories_url;
    public ?string $runners_url;
    public ?bool $inherited;
    public bool $inherited_allows_public_repositories;
    public ?bool $allows_public_repositories;
    /**
     * If `true`, the `restricted_to_workflows` and `selected_workflows` fields cannot be modified.
     */
    public bool $workflow_restrictions_read_only;
    /**
     * If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.
     */
    public bool $restricted_to_workflows;
    /**
     * List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`.
     * @var array<string>
     */
    public array $selected_workflows;
    public function __construct(int $id, string $name, string $visibility, bool $default, string $selected_repositories_url, string $runners_url, bool $inherited, bool $inherited_allows_public_repositories, bool $allows_public_repositories, bool $workflow_restrictions_read_only, bool $restricted_to_workflows, array $selected_workflows)
    {
        $this->id = $id;
        $this->name = $name;
        $this->visibility = $visibility;
        $this->default = $default;
        $this->selected_repositories_url = $selected_repositories_url;
        $this->runners_url = $runners_url;
        $this->inherited = $inherited;
        $this->inherited_allows_public_repositories = $inherited_allows_public_repositories;
        $this->allows_public_repositories = $allows_public_repositories;
        $this->workflow_restrictions_read_only = $workflow_restrictions_read_only;
        $this->restricted_to_workflows = $restricted_to_workflows;
        $this->selected_workflows = $selected_workflows;
    }
}
