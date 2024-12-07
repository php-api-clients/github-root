<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operations\Gists\Get\Response\ApplicationJson\Forbidden;

final readonly class Block implements \ApiClients\Client\GitHub\Contract\Operations\Gists\Get\Response\ApplicationJson\Forbidden\Block
{
    const SCHEMA_JSON = '{
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
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "reason": "generated",
    "created_at": "generated",
    "html_url": "generated"
}';
    public function __construct(public ?string $reason, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl)
    {
    }
}
