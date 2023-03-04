<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Repos\AddCollaborator\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"type":"string","description":"The permission to grant the collaborator. **Only valid on organization-owned repositories.**","default":"push"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"permission":"generated_permission"}';
    /**
     * The permission to grant the collaborator. **Only valid on organization-owned repositories.**
     */
    public ?string $permission;
    public function __construct(string $permission)
    {
        $this->permission = $permission;
    }
}
