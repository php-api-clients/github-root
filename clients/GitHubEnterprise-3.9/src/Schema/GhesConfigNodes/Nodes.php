<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GhesConfigNodes;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Nodes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"hostname":{"type":"string"},"uuid":{"type":"string"},"cluster_roles":{"type":"array","items":{"enum":["Blank","ActionsServer","ConsulServer","ElasticsearchServer","GitServer","JobServer","LaunchServer","MemcacheServer","MetricsServer","MssqlServer","MysqlServer","PagesServer","RedisServer","StorageServer","WebServer"],"type":"string"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"hostname":"generated","uuid":"generated","cluster_roles":["generated","generated"]}';

    public function __construct(public ?string $hostname, public ?string $uuid, #[MapFrom('cluster_roles')] public ?array $clusterRoles)
    {
    }
}
