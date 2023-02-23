<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"Name of the runner group."},"visibility":{"enum":["selected","all"],"type":"string","description":"Visibility of a runner group. You can select all organizations or select individual organizations.","default":"all"},"allows_public_repositories":{"type":"boolean","description":"Whether the runner group can be used by `public` repositories.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","visibility":"generated_visibility","allows_public_repositories":false}';
    /**
     * Name of the runner group.
     */
    public ?string $name;
    /**
     * Visibility of a runner group. You can select all organizations or select individual organizations.
     */
    public ?string $visibility;
    /**
     * Whether the runner group can be used by `public` repositories.
     */
    public ?bool $allows_public_repositories;
    public function __construct(string $name, string $visibility, bool $allows_public_repositories)
    {
        $this->name = $name;
        $this->visibility = $visibility;
        $this->allows_public_repositories = $allows_public_repositories;
    }
}
