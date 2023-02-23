<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Teams\AddOrUpdateMembershipForUserInOrg\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"role":{"enum":["member","maintainer"],"type":"string","description":"The role that this user should have in the team.","default":"member"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"role":"generated_role"}';
    /**
     * The role that this user should have in the team.
     */
    public ?string $role;
    public function __construct(string $role)
    {
        $this->role = $role;
    }
}
