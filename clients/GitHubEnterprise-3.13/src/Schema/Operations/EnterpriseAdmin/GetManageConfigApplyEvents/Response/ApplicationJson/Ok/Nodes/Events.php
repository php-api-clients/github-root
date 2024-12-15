<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\GetManageConfigApplyEvents\Response\ApplicationJson\Ok\Nodes;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Events
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    public function __construct(public string|null $timestamp, #[MapFrom('severity_text')]
    public string|null $severityText, public string|null $body, #[MapFrom('event_name')]
    public string|null $eventName, public string|null $topology, public string|null $hostname, #[MapFrom('config_run_id')]
    public string|null $configRunId, #[MapFrom('trace_id')]
    public string|null $traceId, #[MapFrom('span_id')]
    public string|null $spanId, #[MapFrom('span_parent_id')]
    public string|null $spanParentId, #[MapFrom('span_depth')]
    public int|null $spanDepth,)
    {
    }
}
