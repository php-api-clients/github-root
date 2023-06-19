<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RunnerGroupsOrg
{
    public const SCHEMA_JSON         = '{"required":["id","name","visibility","default","runners_url","inherited","allows_public_repositories"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_repositories_url":{"type":"string","description":"Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`"},"runners_url":{"type":"string"},"inherited":{"type":"boolean"},"inherited_allows_public_repositories":{"type":"boolean"},"allows_public_repositories":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":0.2,"name":"generated","visibility":"generated","default":false,"selected_repositories_url":"generated","runners_url":"generated","inherited":false,"inherited_allows_public_repositories":false,"allows_public_repositories":false}';

    /**
     * selectedRepositoriesUrl: Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`
     */
    public function __construct(public int|float $id, public string $name, public string $visibility, public bool $default, #[MapFrom('selected_repositories_url')]
    public string|null $selectedRepositoriesUrl, #[MapFrom('runners_url')]
    public string $runnersUrl, public bool $inherited, #[MapFrom('inherited_allows_public_repositories')]
    public bool|null $inheritedAllowsPublicRepositories, #[MapFrom('allows_public_repositories')]
    public bool $allowsPublicRepositories,)
    {
    }
}
