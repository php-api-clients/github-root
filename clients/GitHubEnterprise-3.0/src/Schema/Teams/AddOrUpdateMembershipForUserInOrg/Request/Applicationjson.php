<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Teams\AddOrUpdateMembershipForUserInOrg\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"role":{"enum":["member","maintainer"],"type":"string","description":"The role that this user should have in the team. Can be one of:  \\n\\\\* `member` - a normal member of the team.  \\n\\\\* `maintainer` - a team maintainer. Able to add\\/remove other team members, promote other team members to team maintainer, and edit the team\'s name and description.","default":"member"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"role":"generated_role"}';
    /**
    * role: The role that this user should have in the team. Can be one of:  
    \* `member` - a normal member of the team.  
    \* `maintainer` - a team maintainer. Able to add/remove other team members, promote other team members to team maintainer, and edit the team's name and description.
    */
    public function __construct(public ?string $role)
    {
    }
}
