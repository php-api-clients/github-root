<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class RunnerGroupsOrg
{
    public const SCHEMA_JSON = '{"required":["id","name","visibility","default","runners_url","inherited","allows_public_repositories"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_repositories_url":{"type":"string","description":"Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`"},"runners_url":{"type":"string"},"inherited":{"type":"boolean"},"inherited_allows_public_repositories":{"type":"boolean"},"allows_public_repositories":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","visibility":"generated_visibility","default":false,"selected_repositories_url":"generated_selected_repositories_url","runners_url":"generated_runners_url","inherited":false,"inherited_allows_public_repositories":false,"allows_public_repositories":false}';
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
    public function __construct(int $id, string $name, string $visibility, bool $default, string $selected_repositories_url, string $runners_url, bool $inherited, bool $inherited_allows_public_repositories, bool $allows_public_repositories)
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
    }
}
