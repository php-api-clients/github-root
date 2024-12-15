<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesConfigNodes
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "topology": {
            "enum": [
                "SingleNode",
                "Ha",
                "Cluster"
            ],
            "type": "string"
        },
        "nodes": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "hostname": {
                        "type": "string"
                    },
                    "uuid": {
                        "type": "string"
                    },
                    "replica": {
                        "type": "boolean"
                    },
                    "cluster_roles": {
                        "type": "array",
                        "items": {
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
                        }
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "topology": "Cluster",
    "nodes": [
        {
            "hostname": "generated",
            "uuid": "generated",
            "replica": false,
            "cluster_roles": [
                "generated",
                "generated"
            ]
        },
        {
            "hostname": "generated",
            "uuid": "generated",
            "replica": false,
            "cluster_roles": [
                "generated",
                "generated"
            ]
        }
    ]
}';

    public function __construct(public string|null $topology, public array|null $nodes)
    {
    }
}
