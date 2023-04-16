<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\EnterpriseAdmin\UpdateOrgName\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"required":["login"],"type":"object","properties":{"login":{"type":"string","description":"The organization\'s new name."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated_login_null"}';

    /**
     * login: The organization's new name.
     */
    public function __construct(public string $login)
    {
    }
}
