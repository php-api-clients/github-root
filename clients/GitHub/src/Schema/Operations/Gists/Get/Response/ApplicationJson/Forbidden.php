<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operations\Gists\Get\Response\ApplicationJson;

final readonly class Forbidden implements \ApiClients\Client\GitHub\Contract\Operations\Gists\Get\Response\ApplicationJson\Forbidden
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "block": {
            "type": "object",
            "properties": {
                "reason": {
                    "type": "string"
                },
                "created_at": {
                    "type": "string"
                },
                "html_url": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        },
        "message": {
            "type": "string"
        },
        "documentation_url": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "block": {
        "reason": "generated",
        "created_at": "generated",
        "html_url": "generated"
    },
    "message": "generated",
    "documentation_url": "generated"
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\Operations\Gists\Get\Response\ApplicationJson\Forbidden\Block $block, public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('documentation_url')] public ?string $documentationUrl)
    {
    }
}
