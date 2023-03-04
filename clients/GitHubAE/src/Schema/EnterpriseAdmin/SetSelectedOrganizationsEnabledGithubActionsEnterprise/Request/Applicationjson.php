<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_organization_ids"],"type":"object","properties":{"selected_organization_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the organization."},"description":"List of organization IDs to enable for GitHub Actions."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_organization_ids":[null]}';
    /**
     * List of organization IDs to enable for GitHub Actions.
     * @var array<int>
     */
    public ?array $selected_organization_ids;
    public function __construct(array $selected_organization_ids)
    {
        $this->selected_organization_ids = $selected_organization_ids;
    }
}
