<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UpdateLdapMappingForTeam\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["ldap_dn"],"type":"object","properties":{"ldap_dn":{"type":"string","description":"The [distinguished name](https:\\/\\/www.ldap.com\\/ldap-dns-and-rdns) (DN) of the LDAP entry to map to a team."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ldap_dn":"generated_ldap_dn"}';
    /**
     * ldap_dn: The [distinguished name](https://www.ldap.com/ldap-dns-and-rdns) (DN) of the LDAP entry to map to a team.
     */
    public function __construct(public string $ldap_dn)
    {
    }
}
