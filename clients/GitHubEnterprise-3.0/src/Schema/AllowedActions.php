<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class AllowedActions
{
    public const SCHEMA_JSON         = '{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
