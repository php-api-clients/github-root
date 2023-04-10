<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract36898c9bf58c134d8053e1c885f45071
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"role":{"enum":["member","maintainer"],"type":"string","description":"The role that this user should have in the team. Can be one of:  \\n\\\\* `member` - a normal member of the team.  \\n\\\\* `maintainer` - a team maintainer. Able to add\\/remove other team members, promote other team members to team maintainer, and edit the team\'s name and description.","default":"member"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"role":"member"}';
    /**
    * role: The role that this user should have in the team. Can be one of:  
    \* `member` - a normal member of the team.  
    \* `maintainer` - a team maintainer. Able to add/remove other team members, promote other team members to team maintainer, and edit the team's name and description.
    */
    public function __construct(public ?string $role)
    {
    }
}
