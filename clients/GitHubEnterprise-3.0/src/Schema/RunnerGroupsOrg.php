<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class RunnerGroupsOrg
{
    public const SCHEMA_JSON = '{"required":["id","name","visibility","default","runners_url","inherited","allows_public_repositories"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_repositories_url":{"type":"string","description":"Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`"},"runners_url":{"type":"string"},"inherited":{"type":"boolean"},"inherited_allows_public_repositories":{"type":"boolean"},"allows_public_repositories":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name_null","visibility":"generated_visibility_null","default":false,"selected_repositories_url":"generated_selected_repositories_url_null","runners_url":"generated_runners_url_null","inherited":false,"inherited_allows_public_repositories":false,"allows_public_repositories":false}';
    /**
     * selectedRepositoriesUrl: Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`
     */
    public function __construct(public int $id, public string $name, public string $visibility, public bool $default, #[\EventSauce\ObjectHydrator\MapFrom('selected_repositories_url')] public ?string $selectedRepositoriesUrl, #[\EventSauce\ObjectHydrator\MapFrom('runners_url')] public string $runnersUrl, public bool $inherited, #[\EventSauce\ObjectHydrator\MapFrom('inherited_allows_public_repositories')] public ?bool $inheritedAllowsPublicRepositories, #[\EventSauce\ObjectHydrator\MapFrom('allows_public_repositories')] public bool $allowsPublicRepositories)
    {
    }
}
