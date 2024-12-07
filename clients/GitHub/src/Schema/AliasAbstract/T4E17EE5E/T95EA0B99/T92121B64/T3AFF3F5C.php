<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T4E17EE5E\T95EA0B99\T92121B64;

use ApiClients\Client\GitHub\Contract\TopicSearchResultItem\Related\TopicRelation;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T3AFF3F5C implements TopicRelation
{
    public const SCHEMA_JSON         = '{
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated",
    "topic_id": 8,
    "relation_type": "generated"
}';

    public function __construct(public int|null $id, public string|null $name, #[MapFrom('topic_id')]
    public int|null $topicId, #[MapFrom('relation_type')]
    public string|null $relationType,)
    {
    }
}
