<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Actions\CreateSelfHostedRunnerGroupForOrg\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the runner group."},"visibility":{"enum":["selected","all","private"],"type":"string","description":"Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.","default":"all"},"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"List of repository IDs that can access the runner group."},"runners":{"type":"array","items":{"type":"integer","description":"Unique identifier of the runner."},"description":"List of runner IDs to add to the runner group."},"allows_public_repositories":{"type":"boolean","description":"Whether the runner group can be used by `public` repositories.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","visibility":"generated_visibility","selected_repository_ids":[13],"runners":[13],"allows_public_repositories":false}';
    /**
     * Name of the runner group.
     */
    public ?string $name;
    /**
     * Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.
     */
    public string $visibility;
    /**
     * List of repository IDs that can access the runner group.
     * @var array<int>
     */
    public array $selected_repository_ids;
    /**
     * List of runner IDs to add to the runner group.
     * @var array<int>
     */
    public array $runners;
    /**
     * Whether the runner group can be used by `public` repositories.
     */
    public bool $allows_public_repositories;
    public function __construct(string $name, string $visibility, array $selected_repository_ids, array $runners, bool $allows_public_repositories)
    {
        $this->name = $name;
        $this->visibility = $visibility;
        $this->selected_repository_ids = $selected_repository_ids;
        $this->runners = $runners;
        $this->allows_public_repositories = $allows_public_repositories;
    }
}
