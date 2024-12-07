<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T4E17EE5E\T95EA0B99\T92121B64;

abstract readonly class T3AFF3F5C implements \ApiClients\Client\GitHub\Contract\TopicSearchResultItem\Related\TopicRelation
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "topic_id": {
            "type": "integer"
        },
        "relation_type": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated",
    "topic_id": 8,
    "relation_type": "generated"
}';
    public function __construct(public ?int $id, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('topic_id')] public ?int $topicId, #[\EventSauce\ObjectHydrator\MapFrom('relation_type')] public ?string $relationType)
    {
    }
}
