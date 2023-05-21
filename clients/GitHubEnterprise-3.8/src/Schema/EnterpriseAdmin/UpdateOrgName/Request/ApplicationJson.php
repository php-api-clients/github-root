<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UpdateOrgName\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["login"],"type":"object","properties":{"login":{"type":"string","description":"The organization\'s new name."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated"}';

    /**
     * login: The organization's new name.
     */
    public function __construct(public string $login)
    {
    }
}
