<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookProjectsV2ItemReordered\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "previous_projects_v2_item_node_id": {
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "to": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "previous_projects_v2_item_node_id": {
        "from": "generated",
        "to": "generated"
    }
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('previous_projects_v2_item_node_id')] public ?\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsVTwoItemNodeId $previousProjectsVTwoItemNodeId)
    {
    }
}
