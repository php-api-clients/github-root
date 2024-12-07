<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookRepositoryEdited\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "default_branch": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string"
                }
            }
        },
        "description": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        },
        "homepage": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        },
        "topics": {
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "array",
                        "null"
                    ],
                    "items": {
                        "type": "string"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "default_branch": {
        "from": "generated"
    },
    "description": {
        "from": "generated"
    },
    "homepage": {
        "from": "generated"
    },
    "topics": []
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('default_branch')] public ?\ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\DefaultBranch $defaultBranch, public ?\ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\Description $description, public ?\ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\Homepage $homepage, public ?\ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\Topics $topics)
    {
    }
}
