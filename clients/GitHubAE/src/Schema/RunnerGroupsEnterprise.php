<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class RunnerGroupsEnterprise
{
    public const SCHEMA_JSON = '{"required":["id","name","visibility","allows_public_repositories","default","runners_url"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_organizations_url":{"type":"string"},"runners_url":{"type":"string"},"allows_public_repositories":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","visibility":"generated_visibility","default":false,"selected_organizations_url":"generated_selected_organizations_url","runners_url":"generated_runners_url","allows_public_repositories":false}';
    public ?int $id;
    public ?string $name;
    public ?string $visibility;
    public ?bool $default;
    public string $selected_organizations_url;
    public ?string $runners_url;
    public ?bool $allows_public_repositories;
    public function __construct(int $id, string $name, string $visibility, bool $default, string $selected_organizations_url, string $runners_url, bool $allows_public_repositories)
    {
        $this->id = $id;
        $this->name = $name;
        $this->visibility = $visibility;
        $this->default = $default;
        $this->selected_organizations_url = $selected_organizations_url;
        $this->runners_url = $runners_url;
        $this->allows_public_repositories = $allows_public_repositories;
    }
}
