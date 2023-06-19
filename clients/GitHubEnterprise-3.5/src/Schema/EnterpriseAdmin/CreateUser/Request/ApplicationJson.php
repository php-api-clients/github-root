<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\CreateUser\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["login"],"type":"object","properties":{"login":{"type":"string","description":"The user\'s username."},"email":{"type":"string","description":"**Required for built-in authentication.** The user\'s email\\naddress. This parameter can be omitted when using CAS, LDAP, or SAML.\\nFor more information, see \\"[About authentication for your enterprise](https:\\/\\/docs.github.com\\/enterprise-server@3.5\\/admin\\/identity-and-access-management\\/managing-iam-for-your-enterprise\\/about-authentication-for-your-enterprise).\\""}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated","email":"generated"}';

    /**
     * login: The user's username.
     * email: **Required for built-in authentication.** The user's email
    address. This parameter can be omitted when using CAS, LDAP, or SAML.
    For more information, see "[About authentication for your enterprise](https://docs.github.com/enterprise-server@3.5/admin/identity-and-access-management/managing-iam-for-your-enterprise/about-authentication-for-your-enterprise)."
     */
    public function __construct(public string $login, public string|null $email)
    {
    }
}
