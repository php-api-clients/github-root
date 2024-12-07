<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookProjectsV2ItemConverted\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "content_type": {
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "to": {
                    "type": "string"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "content_type": {
        "from": "generated",
        "to": "generated"
    }
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('content_type')] public ?\ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType $contentType)
    {
    }
}
