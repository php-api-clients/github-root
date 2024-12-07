<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T89C23EBB\TF4647739\T0234F250;

abstract readonly class T247FFEEA implements \ApiClients\Client\GitHub\Contract\WebhookIssueCommentCreated\Issue\ReactionsA
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "+1": {
            "type": "integer"
        },
        "-1": {
            "type": "integer"
        },
        "confused": {
            "type": "integer"
        },
        "eyes": {
            "type": "integer"
        },
        "heart": {
            "type": "integer"
        },
        "hooray": {
            "type": "integer"
        },
        "laugh": {
            "type": "integer"
        },
        "rocket": {
            "type": "integer"
        },
        "total_count": {
            "type": "integer"
        },
        "url": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "+1": 11,
    "-1": 10,
    "confused": 8,
    "eyes": 4,
    "heart": 5,
    "hooray": 6,
    "laugh": 5,
    "rocket": 6,
    "total_count": 11,
    "url": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('+1')] public ?int $plusOne, #[\EventSauce\ObjectHydrator\MapFrom('-1')] public ?int $minOne, public ?int $confused, public ?int $eyes, public ?int $heart, public ?int $hooray, public ?int $laugh, public ?int $rocket, #[\EventSauce\ObjectHydrator\MapFrom('total_count')] public ?int $totalCount, public ?string $url)
    {
    }
}
