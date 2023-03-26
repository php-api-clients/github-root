<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class RunnerGroupsEnterprise
{
    public const SCHEMA_JSON = '{"required":["id","name","visibility","allows_public_repositories","default","runners_url"],"type":"object","properties":{"id":{"type":"number"},"name":{"type":"string"},"visibility":{"type":"string"},"default":{"type":"boolean"},"selected_organizations_url":{"type":"string"},"runners_url":{"type":"string"},"allows_public_repositories":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name_null","visibility":"generated_visibility_null","default":false,"selected_organizations_url":"generated_selected_organizations_url_null","runners_url":"generated_runners_url_null","allows_public_repositories":false}';
    public function __construct(public int $id, public string $name, public string $visibility, public bool $default, #[\EventSauce\ObjectHydrator\MapFrom('selected_organizations_url')] public ?string $selectedOrganizationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('runners_url')] public string $runnersUrl, #[\EventSauce\ObjectHydrator\MapFrom('allows_public_repositories')] public bool $allowsPublicRepositories)
    {
    }
}
