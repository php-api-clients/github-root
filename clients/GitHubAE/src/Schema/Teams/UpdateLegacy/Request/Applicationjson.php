<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Teams\UpdateLegacy\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the team."},"description":{"type":"string","description":"The description of the team."},"privacy":{"enum":["secret","closed"],"type":"string","description":"The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:  \\n**For a non-nested team:**  \\n * `secret` - only visible to organization owners and members of this team.  \\n * `closed` - visible to all members of this organization.  \\n**For a parent or child team:**  \\n * `closed` - visible to all members of this organization."},"permission":{"enum":["pull","push","admin"],"type":"string","description":"**Deprecated**. The permission that new repositories will be added to the team with when none is specified.","default":"pull"},"parent_team_id":{"type":["integer","null"],"description":"The ID of a team to set as the parent team."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","description":"generated_description","privacy":"generated_privacy","permission":"generated_permission","parent_team_id":13}';
    /**
     * The name of the team.
     */
    public ?string $name;
    /**
     * The description of the team.
     */
    public string $description;
    /**
    * The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:  
    **For a non-nested team:**  
    * `secret` - only visible to organization owners and members of this team.  
    * `closed` - visible to all members of this organization.  
    **For a parent or child team:**  
    * `closed` - visible to all members of this organization.
    */
    public string $privacy;
    /**
     * **Deprecated**. The permission that new repositories will be added to the team with when none is specified.
     */
    public string $permission;
    /**
     * The ID of a team to set as the parent team.
     */
    public ?int $parent_team_id;
    public function __construct(string $name, string $description, string $privacy, string $permission, int $parent_team_id)
    {
        $this->name = $name;
        $this->description = $description;
        $this->privacy = $privacy;
        $this->permission = $permission;
        $this->parent_team_id = $parent_team_id;
    }
}
