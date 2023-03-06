<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Teams\Create\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the team."},"description":{"type":"string","description":"The description of the team."},"maintainers":{"type":"array","items":{"type":"string"},"description":"List GitHub IDs for organization members who will become team maintainers."},"repo_names":{"type":"array","items":{"type":"string"},"description":"The full name (e.g., \\"organization-name\\/repository-name\\") of repositories to add the team to."},"privacy":{"enum":["secret","closed"],"type":"string","description":"The level of privacy this team should have. The options are:  \\n**For a non-nested team:**  \\n\\\\* `secret` - only visible to organization owners and members of this team.  \\n\\\\* `closed` - visible to all members of this organization.  \\nDefault: `secret`  \\n**For a parent or child team:**  \\n\\\\* `closed` - visible to all members of this organization.  \\nDefault for child team: `closed`"},"permission":{"enum":["pull","push"],"type":"string","description":"**Deprecated**. The permission that new repositories will be added to the team with when none is specified.","default":"pull"},"parent_team_id":{"type":"integer","description":"The ID of a team to set as the parent team."},"ldap_dn":{"type":"string","description":"The [distinguished name](https:\\/\\/www.ldap.com\\/ldap-dns-and-rdns) (DN) of the LDAP entry to map to a team. LDAP synchronization must be enabled to map LDAP entries to a team. Use the \\"[Update LDAP mapping for a team](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/enterprise-admin#update-ldap-mapping-for-a-team)\\" endpoint to change the LDAP DN. For more information, see \\"[Using LDAP](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/admin\\/identity-and-access-management\\/authenticating-users-for-your-github-enterprise-server-instance\\/using-ldap#enabling-ldap-sync).\\""}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","description":"generated_description","maintainers":["generated_maintainers"],"repo_names":["generated_repo_names"],"privacy":"generated_privacy","permission":"generated_permission","parent_team_id":13,"ldap_dn":"generated_ldap_dn"}';
    /**
     * The name of the team.
     */
    public ?string $name;
    /**
     * The description of the team.
     */
    public string $description;
    /**
     * List GitHub IDs for organization members who will become team maintainers.
     * @var array<string>
     */
    public array $maintainers;
    /**
     * The full name (e.g., "organization-name/repository-name") of repositories to add the team to.
     * @var array<string>
     */
    public array $repo_names;
    /**
    * The level of privacy this team should have. The options are:  
    **For a non-nested team:**  
    \* `secret` - only visible to organization owners and members of this team.  
    \* `closed` - visible to all members of this organization.  
    Default: `secret`  
    **For a parent or child team:**  
    \* `closed` - visible to all members of this organization.  
    Default for child team: `closed`
    */
    public string $privacy;
    /**
     * **Deprecated**. The permission that new repositories will be added to the team with when none is specified.
     */
    public string $permission;
    /**
     * The ID of a team to set as the parent team.
     */
    public int $parent_team_id;
    /**
     * The [distinguished name](https://www.ldap.com/ldap-dns-and-rdns) (DN) of the LDAP entry to map to a team. LDAP synchronization must be enabled to map LDAP entries to a team. Use the "[Update LDAP mapping for a team](https://docs.github.com/enterprise-server@3.1/rest/reference/enterprise-admin#update-ldap-mapping-for-a-team)" endpoint to change the LDAP DN. For more information, see "[Using LDAP](https://docs.github.com/enterprise-server@3.1/admin/identity-and-access-management/authenticating-users-for-your-github-enterprise-server-instance/using-ldap#enabling-ldap-sync)."
     */
    public string $ldap_dn;
    public function __construct(string $name, string $description, array $maintainers, array $repo_names, string $privacy, string $permission, int $parent_team_id, string $ldap_dn)
    {
        $this->name = $name;
        $this->description = $description;
        $this->maintainers = $maintainers;
        $this->repo_names = $repo_names;
        $this->privacy = $privacy;
        $this->permission = $permission;
        $this->parent_team_id = $parent_team_id;
        $this->ldap_dn = $ldap_dn;
    }
}
