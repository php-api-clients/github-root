<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the runner group."},"visibility":{"enum":["selected","all"],"type":"string","description":"Visibility of a runner group. You can select all organizations or select individual organization."},"selected_organization_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the organization."},"description":"List of organization IDs that can access the runner group."},"runners":{"type":"array","items":{"type":"integer","description":"Unique identifier of the runner."},"description":"List of runner IDs to add to the runner group."},"allows_public_repositories":{"type":"boolean","description":"Whether the runner group can be used by `public` repositories.","default":false},"restricted_to_workflows":{"type":"boolean","description":"If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.","default":false},"selected_workflows":{"type":"array","items":{"type":"string","description":"Name of workflow the runner group should be allowed to run. Note that a ref, tag, or long SHA is required.","examples":["octo-org\\/octo-repo\\/.github\\/workflows\\/deploy.yaml@main"]},"description":"List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","visibility":"generated_visibility","selected_organization_ids":[13],"runners":[13],"allows_public_repositories":false,"restricted_to_workflows":false,"selected_workflows":["generated_selected_workflows"]}';
    /**
     * Name of the runner group.
     */
    public ?string $name;
    /**
     * Visibility of a runner group. You can select all organizations or select individual organization.
     */
    public string $visibility;
    /**
     * List of organization IDs that can access the runner group.
     * @var array<int>
     */
    public array $selected_organization_ids;
    /**
     * List of runner IDs to add to the runner group.
     * @var array<int>
     */
    public array $runners;
    /**
     * Whether the runner group can be used by `public` repositories.
     */
    public bool $allows_public_repositories;
    /**
     * If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.
     */
    public bool $restricted_to_workflows;
    /**
     * List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`.
     * @var array<string>
     */
    public array $selected_workflows;
    public function __construct(string $name, string $visibility, array $selected_organization_ids, array $runners, bool $allows_public_repositories, bool $restricted_to_workflows, array $selected_workflows)
    {
        $this->name = $name;
        $this->visibility = $visibility;
        $this->selected_organization_ids = $selected_organization_ids;
        $this->runners = $runners;
        $this->allows_public_repositories = $allows_public_repositories;
        $this->restricted_to_workflows = $restricted_to_workflows;
        $this->selected_workflows = $selected_workflows;
    }
}
