<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesClusterRoles
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "Blank",
        "ActionsServer",
        "ConsulServer",
        "ElasticsearchServer",
        "GitServer",
        "JobServer",
        "LaunchServer",
        "MemcacheServer",
        "MetricsServer",
        "MssqlServer",
        "MysqlServer",
        "PagesServer",
        "RedisServer",
        "StorageServer",
        "WebServer"
    ],
    "type": "string"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
