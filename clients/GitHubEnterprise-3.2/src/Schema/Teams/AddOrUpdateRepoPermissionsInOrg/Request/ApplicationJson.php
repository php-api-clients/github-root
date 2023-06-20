<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Teams\AddOrUpdateRepoPermissionsInOrg\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"permission":{"type":"string","description":"The permission to grant the team on this repository. If no permission is specified, the team\'s `permission` attribute will be used to determine what permission to grant the team on this repository.","default":"push"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"permission":"generated"}';

    /**
     * permission: The permission to grant the team on this repository. If no permission is specified, the team's `permission` attribute will be used to determine what permission to grant the team on this repository.
     */
    public function __construct(public string|null $permission)
    {
    }
}
