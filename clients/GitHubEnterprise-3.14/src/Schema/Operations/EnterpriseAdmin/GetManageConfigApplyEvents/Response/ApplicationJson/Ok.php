<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\GetManageConfigApplyEvents\Response\ApplicationJson;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "nodes": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "node": {
                        "type": "string",
                        "description": "Hostname of the node"
                    },
                    "last_request_id": {
                        "type": "string",
                        "description": "Unique ID of the last response from a host used for pagination"
                    },
                    "events": {
                        "type": "array",
                        "items": {
                            "type": "object",
                            "properties": {
                                "timestamp": {
                                    "type": "string"
                                },
                                "severity_text": {
                                    "type": "string"
                                },
                                "body": {
                                    "type": "string"
                                },
                                "event_name": {
                                    "type": "string"
                                },
                                "topology": {
                                    "type": "string"
                                },
                                "hostname": {
                                    "type": "string"
                                },
                                "config_run_id": {
                                    "type": "string"
                                },
                                "trace_id": {
                                    "type": "string"
                                },
                                "span_id": {
                                    "type": "string"
                                },
                                "span_parent_id": {
                                    "type": "string"
                                },
                                "span_depth": {
                                    "type": "integer"
                                }
                            }
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
    "nodes": [
        {
            "node": "generated",
            "last_request_id": "generated",
            "events": [
                {
                    "timestamp": "generated",
                    "severity_text": "generated",
                    "body": "generated",
                    "event_name": "generated",
                    "topology": "generated",
                    "hostname": "generated",
                    "config_run_id": "generated",
                    "trace_id": "generated",
                    "span_id": "generated",
                    "span_parent_id": "generated",
                    "span_depth": 10
                },
                {
                    "timestamp": "generated",
                    "severity_text": "generated",
                    "body": "generated",
                    "event_name": "generated",
                    "topology": "generated",
                    "hostname": "generated",
                    "config_run_id": "generated",
                    "trace_id": "generated",
                    "span_id": "generated",
                    "span_parent_id": "generated",
                    "span_depth": 10
                }
            ]
        },
        {
            "node": "generated",
            "last_request_id": "generated",
            "events": [
                {
                    "timestamp": "generated",
                    "severity_text": "generated",
                    "body": "generated",
                    "event_name": "generated",
                    "topology": "generated",
                    "hostname": "generated",
                    "config_run_id": "generated",
                    "trace_id": "generated",
                    "span_id": "generated",
                    "span_parent_id": "generated",
                    "span_depth": 10
                },
                {
                    "timestamp": "generated",
                    "severity_text": "generated",
                    "body": "generated",
                    "event_name": "generated",
                    "topology": "generated",
                    "hostname": "generated",
                    "config_run_id": "generated",
                    "trace_id": "generated",
                    "span_id": "generated",
                    "span_parent_id": "generated",
                    "span_depth": 10
                }
            ]
        }
    ]
}';

    public function __construct(public array|null $nodes)
    {
    }
}
