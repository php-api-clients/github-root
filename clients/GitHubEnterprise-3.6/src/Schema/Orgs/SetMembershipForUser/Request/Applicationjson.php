<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Orgs\SetMembershipForUser\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"role":{"enum":["admin","member"],"type":"string","description":"The role to give the user in the organization. Can be one of:  \\n * `admin` - The user will become an owner of the organization.  \\n * `member` - The user will become a non-owner member of the organization.","default":"member"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"role":"admin"}';
    /**
     * role: The role to give the user in the organization. Can be one of:  
     * `admin` - The user will become an owner of the organization.  
     * `member` - The user will become a non-owner member of the organization.
     */
    public function __construct(public ?string $role)
    {
    }
}
