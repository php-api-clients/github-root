<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the runner group."},"visibility":{"enum":["selected","all"],"type":"string","description":"Visibility of a runner group. You can select all organizations or select individual organization. Can be one of: `all` or `selected`"},"selected_organization_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the organization."},"description":"List of organization IDs that can access the runner group."},"runners":{"type":"array","items":{"type":"integer","description":"Unique identifier of the runner."},"description":"List of runner IDs to add to the runner group."},"allows_public_repositories":{"type":"boolean","description":"Whether the runner group can be used by `public` repositories.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","visibility":"generated_visibility","selected_organization_ids":[13],"runners":[13],"allows_public_repositories":false}';
    /**
     * name: Name of the runner group.
     * visibility: Visibility of a runner group. You can select all organizations or select individual organization. Can be one of: `all` or `selected`
     * selected_organization_ids: List of organization IDs that can access the runner group.
     * @param ?array<int> $selected_organization_ids
     * runners: List of runner IDs to add to the runner group.
     * @param ?array<int> $runners
     * allows_public_repositories: Whether the runner group can be used by `public` repositories.
     */
    public function __construct(public string $name, public ?string $visibility, public ?array $selected_organization_ids, public ?array $runners, public ?bool $allows_public_repositories)
    {
    }
}
