<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TD9DFA38E\TD9136D28\TD1296A44;

use ApiClients\Client\GitHub\Contract\TopicSearchResultItem\Related;
use ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related\TopicRelation;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TA1883F7A implements Related
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "topic_relation": {
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "topic_relation": {
        "id": 2,
        "name": "generated",
        "topic_id": 8,
        "relation_type": "generated"
    }
}';

    public function __construct(#[MapFrom('topic_relation')]
    public TopicRelation|null $topicRelation,)
    {
    }
}
