<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GhesConfigNodes;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Nodes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"hostname":{"type":"string"},"uuid":{"type":"string"},"replica":{"type":"boolean"},"cluster_roles":{"type":"array","items":{"enum":["Blank","ActionsServer","ConsulServer","ElasticsearchServer","GitServer","JobServer","LaunchServer","MemcacheServer","MetricsServer","MssqlServer","MysqlServer","PagesServer","RedisServer","StorageServer","WebServer"],"type":"string"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"hostname":"generated","uuid":"generated","replica":false,"cluster_roles":["generated","generated"]}';

    public function __construct(public string|null $hostname, public string|null $uuid, public bool|null $replica, #[MapFrom('cluster_roles')]
    public array|null $clusterRoles,)
    {
    }
}
