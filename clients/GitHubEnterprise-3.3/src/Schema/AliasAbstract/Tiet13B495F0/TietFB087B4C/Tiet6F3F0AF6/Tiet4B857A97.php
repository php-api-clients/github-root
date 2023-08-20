<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet13B495F0\TietFB087B4C\Tiet6F3F0AF6;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet4B857A97
{
    public const SCHEMA_JSON         = '{
    "required": [
        "ldap_dn"
    ],
    "type": "object",
    "properties": {
        "ldap_dn": {
            "type": "string",
            "description": "The [distinguished name](https:\\/\\/www.ldap.com\\/ldap-dns-and-rdns) (DN) of the LDAP entry to map to a team."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ldap_dn": "generated"
}';

    /**
     * ldapDn: The [distinguished name](https://www.ldap.com/ldap-dns-and-rdns) (DN) of the LDAP entry to map to a team.
     */
    public function __construct(#[MapFrom('ldap_dn')]
    public string $ldapDn,)
    {
    }
}
