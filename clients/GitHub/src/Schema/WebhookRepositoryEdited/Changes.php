<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited;

use ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\DefaultBranch;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\Description;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\Homepage;
use ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\Topics;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookRepositoryEdited\Changes
{
    public const SCHEMA_JSON         = '{
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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

    public function __construct(#[MapFrom('default_branch')]
    public DefaultBranch|null $defaultBranch, public Description|null $description, public Homepage|null $homepage, public Topics|null $topics,)
    {
    }
}
